<?php
namespace App\Http\Controllers;

use App\Modules\Artworker\ArtworkerRepository;

class WebController extends Controller
{
    protected $artworker_repository;

    public function __construct(ArtworkerRepository $artworker_repository)
    {
        $this->artworker_repository = $artworker_repository;
    }

    public function index()
    {
        return view('web.index');
    }

    public function view($id)
    {
        $artworker = $this->artworker_repository->findById($id);
        $data['artworker'] = $artworker;
        return view('web.artworker.index', $data);
    }
}