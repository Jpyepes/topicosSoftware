<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $data1 = 'About us - Online Store';
        $data2 = 'About us';
        $description = 'This is an about page ...';
        $author = 'Developed by: Juan Pablo Yepes';

        return view('home.about')->with('title', $data1)
            ->with('subtitle', $data2)
            ->with('description', $description)
            ->with('author', $author);
    }
}
