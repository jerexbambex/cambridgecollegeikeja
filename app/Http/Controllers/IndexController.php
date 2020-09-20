<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\Director;
use App\Principal;
use App\Program;
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

    	return view('frontend.index', compact('programs', 'testimonials', 'director', 'principal', 'coordinator'));
    }
}
