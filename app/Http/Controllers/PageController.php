<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Home()
    {
        return view('pages.home');
    }
    public function About()
    {
        return view('pages.about');
    }
    public function Blog()
    {
        return view('pages.blog');
    }
}
