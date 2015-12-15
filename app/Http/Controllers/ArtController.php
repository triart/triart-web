<?php
namespace App\Http\Controllers;

use App\Modules\Art\ArtRepository;
use App\Modules\Artworker\ArtworkerRepository;
use App\Modules\Category\CategoryRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArtController extends Controller
{
    protected $artworker_repository;
    protected $art_repository;
    protected $category_repository;

    public function __construct(ArtworkerRepository $artworker_repository, ArtRepository $art_repository, CategoryRepository $category_repository)
    {
        $this->art_repository = $art_repository;
        $this->artworker_repository = $artworker_repository;
        $this->category_repository = $category_repository;
    }

    public function index($artworker_id)
    {
        $artworker = $this->artworker_repository->findById($artworker_id);
        $data['artworker'] = $artworker;
        return view('dashboard.artworker.arts.index', $data);
    }

    public function createForm($artworker_id)
    {
        $artworker = $this->artworker_repository->findById($artworker_id);
        $categories = $this->category_repository->getList();
        $data['artworker'] = $artworker;
        $data['categories'] = $categories;
        $data['selected_category'] = [];
        return view('dashboard.artworker.arts.form', $data);
    }

    public function view($id)
    {
        $art = $this->art_repository->findById($id);
        $artworker = $art->artworker;
        $categories = $this->category_repository->getList();
        $data['art'] = $art;
        $data['artworker'] = $artworker;
        $data['categories'] = $categories;
        $data['selected_category'] = $art->categories()->lists('id')->toArray();
        return view('dashboard.artworker.arts.form', $data);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');


        $art = $this->art_repository->findById($id);
        $art = $this->art_repository->update($art, $data);

        if (!$art) {
            \Session::flash('alert-error', 'Error while updating art '.$data['title']);
            return redirect()->to('/artworker')->withInput();
        }

        //Detach all
        $art->categories()->detach();

        $category_ids = $request->input('categories');

        if (!empty($category_ids)) {
            foreach ($category_ids as $category_id) {
                $art->categories()->attach($category_id);
            }
        }

        \Session::flash('alert-success', 'Art '.$data['title']. ' has been updated');

        $artworker_id = $art->artworker->id;
        return redirect()->action('ArtController@index', [$artworker_id]);
    }

    public function store(Request $request, $artworker_id)
    {
        $data = [];
        $data['artworker_id'] = $artworker_id;
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');

        $art = $this->art_repository->create($data);

        if (!$art) {
            \Session::flash('alert-error', 'Error while updating artworker '.$data['name']);
            return redirect()->to('/artworker/'.$artworker_id.'/art/create')->withInput();
        }

        $category_ids = $request->input('categories');

        if (!empty($category_ids)) {
            foreach ($category_ids as $category_id) {
                $art->categories()->attach($category_id);
            }
        }


        \Session::flash('alert-success', 'Art with title : '.$data['title']. ' has been created');

        $return['artworker_id'] = $this->artworker_repository->findById($artworker_id)->id;
        $return['art_id'] = $art->id;
        //return redirect()->action('ArtController@index', [$artworker_id])->with($return);
       return view('dashboard.artworker.arts.uploadimage', $return);
    }

    public function delete($id)
    {
        $art = $this->art_repository->findById($id);
        $this->deleteArtFile($art);

        $artworker_id = $art->artworker->id;
        if (!$this->art_repository->delete($art)) {
            \Session::flash('alert-error', 'Error while deleting art '.$art->title);
            return redirect()->action('ArtController@index', [$artworker_id]);
        }

        \Session::flash('alert-success', 'Art '.$art->title. ' has been deleted');

        return redirect()->action('ArtController@index', [$artworker_id]);
    }

    public function uploadArt(Request $request, $id)
    {
        if (!$request->hasFile('avatar_file')) {
            return response()->setStatusCode(500);
        }

        $art = $this->art_repository->findById($id);
        $this->deleteArtFile($art);

        $art_image_path = '/images/art/';
        /**
         * Move to storage
         */
        $destination_path = public_path().$art_image_path;
        $file_name = $this->provideArtFilename($request, $art);
        $request->file('avatar_file')->move($destination_path, $file_name);

        /**
         * Update profile picture location to db
         * Provide full url location
         */
        $url = url().$art_image_path.$file_name;
        $data['image_url'] = $url;
        $this->art_repository->update($art, $data);

        return response()->json(['result' => $url, 'state' => 200])->setStatusCode(200);
    }

    protected function provideArtFilename(Request $request, $art)
    {
        $timestamp = Carbon::now()->timestamp;
        return $art->id.'_'.$timestamp.'.'.$request->file('avatar_file')->getClientOriginalExtension();
    }

    protected function deleteArtFile($art)
    {
        if (!empty($art->image_url)) {
            $file_location = parse_url($art->image_url, PHP_URL_PATH);
            File::delete(public_path().$file_location);
        }
    }
}