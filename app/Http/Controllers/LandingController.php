<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the Landing Home / Index page.
     */
    public function index()
    {
        return view('landing.index');
    }

    /**
     * Display the About page.
     */
    public function about()
    {
        return view('landing.about');
    }

    /**
     * Display the Courses page.
     */
    public function course()
    {
        return view('landing.course');
    }

    /**
     * Display the Blogs page.
     */
    public function blog()
    {
        return view('landing.blog');
    }

    /**
     * Display the Features page.
     */
    public function feature()
    {
        return view('landing.feature');
    }

    /**
     * Display the Contact page.
     */
    public function contact()
    {
        return view('landing.contact');
    }
}
