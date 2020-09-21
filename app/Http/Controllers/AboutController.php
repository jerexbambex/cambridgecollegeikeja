<?php

namespace App\Http\Controllers;

use App\About;
use App\Form;
use App\Result;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$about = About::first();
        $form = Form::first();
    	
    	return view('frontend.pages.about', compact('about', 'form'));
    }

    public function whyUs()
    {
        $results = Result::all();
        $form = Form::first();

        return view('frontend.pages.whyus', compact('results', 'form'));
    }
}
