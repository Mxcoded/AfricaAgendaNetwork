<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home Page
    public function index()
    {
        return view('home');
    }
    // Privacy Policy Page
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    // About Page

    public function about()
    {
        return view('about');
    }

    public function NewsAndInSights()
    {
        return view('newsandinsights');
    }
}