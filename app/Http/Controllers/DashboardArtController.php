<?php
namespace App\Http\Controllers;

use App\Modules\Art\ArtRepository;

class DashboardArtController extends Controller
{
    protected $art_repository;

    public function __construct(ArtRepository $art_repository)
    {
        $this->art_repository = $art_repository;
    }

    public function index()
    {
        if (!\Input::has('search')) {
            $data['page_title'] = 'Art Gallery';
            $data['arts'] = $this->art_repository->getList(20);
        } else {
            $data['page_title'] = 'Search Result';
            $data['arts'] = $this->art_repository->search(\Input::get('search'), 20);
        }

        return view('dashboard.art.index', $data);
    }

    public function featuredPage()
    {
        $data['page_title'] = 'Featured List';
        $data['arts'] = $this->art_repository->getFeaturedList(20);
        return view('dashboard.art.featured', $data);
    }

    public function featured($art_id)
    {
        $art = $this->art_repository->findById($art_id);
        $data['featured'] = ($art->featured) ? 0 : 1;

        if (!$this->art_repository->update($art, $data)) {
            \Session::flash('alert-error', 'Error while updating art');
            return redirect()->to('/dashboard/art');
        }

        return redirect()->to('/dashboard/art');
    }
}