<?php
namespace App\Http\Controllers;

use App\Modules\Artworker\ArtworkerRepository;
use App\Modules\Category\CategoryRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ArtworkerController extends Controller
{
    protected $artworker_repository;
    protected $category_repository;

    public function __construct(ArtworkerRepository $artworker_repository, CategoryRepository $category_repository)
    {
        $this->artworker_repository = $artworker_repository;
        $this->category_repository = $category_repository;
    }

    public function index()
    {
        if (!\Input::has('search')) {
            $data['artworkers'] = $this->artworker_repository->getList(20);
            $data['artworker_title'] = 'Artworker List';
        } else {
            $data['artworker_title'] = 'Search Result';
            $data['artworkers'] = $this->artworker_repository->search(\Input::get('search'), 20);
        }

        return view('dashboard.artworker.index', $data);
    }

    public function createForm()
    {
        $data['categories'] = $this->category_repository->getList();
        $data['selected_category'] = [];
        return view('dashboard.artworker.form', $data);
    }

    public function store(Request $request)
    {
        $data = [];
        $data['username'] = $request->input('username');
        $data['name'] = $request->input('name');
        $data['description'] = trim($request->input('description'));
        $data['location'] = $request->input('location');
        $data['profile_picture'] = $request->input('profile_picture');

        $artworker = $this->artworker_repository->create($data);

        $category_ids = $request->input('categories');

        if (!empty($category_ids)) {
            foreach ($category_ids as $category_id) {
                $artworker->categories()->attach($category_id);
            }
        }

        if (!$artworker) {
            \Session::flash('alert-error', 'Error while creating artworker '.$data['name']);
            return redirect()->to('/dashboard/artworker')->withInput();
        }

        $data['artworker_id'] = $artworker->id;

        \Session::flash('alert-success', 'Artworker '.$data['name']. ' has been created');
        return view('dashboard.artworker.uploadavatar', $data);
    }

    public function view($id)
    {
        $artworker = $this->artworker_repository->findById($id);
        $data['artworker'] = $artworker;
        $data['categories'] = $this->category_repository->getList();
        $data['selected_category'] = $artworker->categories()->lists('id')->toArray();
        return \View::make('dashboard.artworker.form', $data);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['username'] = $request->input('username');
        $data['name'] = $request->input('name');
        $data['description'] = $request->input('description');
        $data['location'] = $request->input('location');

        $artworker = $this->artworker_repository->findById($id);
        $artworker = $this->artworker_repository->update($artworker, $data);

        //Detach all
        $artworker->categories()->detach();

        $category_ids = $request->input('categories');

        if (!empty($category_ids)) {
            foreach ($category_ids as $category_id) {
                $artworker->categories()->attach($category_id);
            }
        }

        if (!$artworker) {
            \Session::flash('alert-error', 'Error while updating artworker '.$data['name']);
            return redirect()->to('/dashboard/artworker')->withInput();
        }

        \Session::flash('alert-success', 'Artworker '.$data['name']. ' has been updated');
        return redirect()->to('/dashboard/artworker');
    }

    public function delete($id)
    {
        $artworker = $this->artworker_repository->findById($id);
        $artworker->categories()->detach();
        $this->deleteAvatar($artworker);

        if (!$this->artworker_repository->delete($artworker)) {
            \Session::flash('alert-error', 'Error while deleting artworker '.$artworker->name);
            return redirect()->to('/dashboard/artworker');
        }

        \Session::flash('alert-success', 'Artworker '.$artworker->name. ' has been deleted');

        return redirect()->to('/dashboard/artworker');
    }

    public function uploadAvatar(Request $request, $id)
    {
        if (!$request->hasFile('avatar_file')) {
            return response()->setStatusCode(500);
        }

        $avatar_data = $request->input('avatar_data');
        $avatar_data = json_decode($avatar_data);

        /**
         * Find and delete the oldimage if exist
         */
        $artworker = $this->artworker_repository->findById($id);
        $this->deleteAvatar($artworker);

        $artworker_image_path = '/images/artworker/';
        $destination_path = public_path().$artworker_image_path;
        $file_name = $this->provideAvatarFilename($request, $artworker);

        /**
         * Create image, rotate, crop, resize then save it to size 168 px X 168 px
         */
        Image::make($request->file('avatar_file'))
            ->rotate($avatar_data->rotate)
            ->crop(intval($avatar_data->width), intval($avatar_data->height), intval($avatar_data->x), intval($avatar_data->y))
            ->resize(168,168)
            ->save($destination_path.$file_name);

        /**
         * Update profile picture location to db
         * Provide full url location
         */
        $url = url().$artworker_image_path.$file_name;
        $data['profile_picture'] = $url;
        $this->artworker_repository->update($artworker, $data);

        return response()->json(['result' => $url, 'state' => 200])->setStatusCode(200);
    }

    protected function provideAvatarFilename(Request $request, $artworker)
    {
        $timestamp = Carbon::now()->timestamp;
        return $artworker->username.'_'.$timestamp.'.'.$request->file('avatar_file')->getClientOriginalExtension();
    }

    protected function deleteAvatar($artworker)
    {
        if (!empty($artworker->profile_picture)) {
            $file_location = parse_url($artworker->profile_picture, PHP_URL_PATH);
            File::delete(public_path().$file_location);
        }
    }

}