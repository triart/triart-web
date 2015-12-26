<?php
namespace App\Http\Controllers;

use App\Modules\Art\ArtRepository;
use App\Modules\Artworker\ArtworkerRepository;
use App\Modules\Category\CategoryRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
        $artworker_id = $art->artworker->id;

        if (!$art) {
            \Session::flash('alert-error', 'Error while updating art '.$data['title']);
            return redirect()->action('ArtController@index', [$artworker_id]);
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

        $art_data = $request->input('avatar_data');
        $art_data = json_decode($art_data);

        $art_image_path = '/images/art/';
        $art_thumbnail_path = '/images/art/thumbnail/';

        /**
         * Set the filename
         */
        $destination_path = public_path().$art_image_path;
        $thumbnail_dest_path = public_path().$art_thumbnail_path;
        $file_name = $this->provideArtFilename($request, $art);

        /**
         * Save original resolution
         */
        Image::make($request->file('avatar_file'))
            ->save($destination_path.$file_name);

        /**
         * Create thumbnail image, rotate, crop, resize then save it to size 346 px X 346 px
         */
        Image::make($request->file('avatar_file'))
            ->rotate($art_data->rotate)
            ->crop(intval($art_data->width), intval($art_data->height), intval($art_data->x), intval($art_data->y))
            ->resize(346,346)
            ->save($thumbnail_dest_path.$file_name);

        /**
         * Update profile picture location to db
         * Provide full url location
         */
        $url = url().$art_image_path.$file_name;
        $thumbnail_url = url().$art_thumbnail_path.$file_name;
        $data['image_url'] = $url;
        $data['thumbnail_url'] = $thumbnail_url;
        $this->art_repository->update($art, $data);

        return response()->json(['result' => $thumbnail_url, 'state' => 200])->setStatusCode(200);
    }

    public function _uploadArt(Request $request, $id)
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