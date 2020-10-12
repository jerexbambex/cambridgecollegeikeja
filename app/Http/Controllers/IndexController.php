<?php

namespace App\Http\Controllers;

use App\About;
use App\Program;
use App\Director;
use App\Principal;
use App\Coordinator;
use App\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$director = Director::first();
        $principal = Principal::first();
        $coordinator = Coordinator::first();
    	$programs = Program::all();
    	$testimonials = Testimonial::all();
    	$about = About::first();

    	return view('frontend.index', compact('programs', 'testimonials', 'director', 'principal', 'coordinator', 'about'));
    }
}
