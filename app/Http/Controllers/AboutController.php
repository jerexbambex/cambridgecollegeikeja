<?php

namespace App\Http\Controllers;

use App\About;
use App\Result;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$about = About::first();
    	
    	return view('frontend.pages.about', compact('about'));
    }

    public function whyUs()
    {
        $results = Result::all();

        return view('frontend.pages.whyus', compact('results'));
    }
}
