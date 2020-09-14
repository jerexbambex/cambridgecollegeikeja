<?php

namespace App\Http\Controllers;

use App\Program;
use App\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$programs = Program::all();
    	$testimonials = Testimonial::all();

    	return view('frontend.index', compact('programs', 'testimonials'));
    }
}
