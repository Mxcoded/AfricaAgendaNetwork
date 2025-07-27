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
    // About Page
    public function about()
    {
        return view('about');
    }
    // Our Services Page
    public function ourServices()
    {
        return view('our-services');
    }
    // Gallery Page
    public function gallery()
    {
        return view('pages.newsandinsights');
    }
    // Data Hub Page
    public function dataHub()
    {
        return view('pages.data_hub');
    }
    // Contact Page
    public function contact()
    {
        return view('pages.contact');
    }
    // Privacy Policy Page
    public function privacyPolicy()
    {
        return view('pages.privacy_policy');
    }

    public function newsletterSubscribe(Request $request)
    {
        // Handle the newsletter subscription logic here
        // For example, validate the request and save the email to the database

        return response()->json(['message' => 'Subscription successful!']);
    }   
}