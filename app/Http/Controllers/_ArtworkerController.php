<?php
namespace App\Http\Controllers;

class ArtworkerController extends Controller
{
    public function view($id)
    {
        return view('web.artworker.index');
    }
}