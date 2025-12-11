<?php

namespace App\Http\Controllers;
use Canvas\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\UrlGenerator;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //Home Page
    public function index()
    {
        $posts = Post::published()->latest()->get();

        return view('home', compact('posts'));
    }
    // About Page
    public function about()
    {
        return view('pages.about');
    }
    // Our Services Page
    public function ourServices()
    {
        return view('pages.our-services');
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
    
    public function displayImage($link)
    {
        $path = storage_path('app/private/public/canvas/images/Ec4uhDycVk9pzuj2ziAJI6ePCtRE4WkskAtYcdDD.avif');
        //$path = storage_path('app/file.txt');


        return response()->file($path);
    }

    public function getResponseImage($filename)
    {
        //$file = Storage::url($filename);
        //dd($file);
        return Storage::disk('private')->path($filename);

       // return new Response($file);
    }

}