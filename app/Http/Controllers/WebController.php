<?php
namespace App\Http\Controllers;

class WebController extends Controller
{
    public function view($id)
    {
        return view('web.artworker.index');
    }
}