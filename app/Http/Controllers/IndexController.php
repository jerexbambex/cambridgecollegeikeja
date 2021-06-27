<?php

namespace App\Http\Controllers;

use App\Team;
use App\About;
use App\Gallery;
use App\Program;
use App\Director;
use App\Coordinator;
use App\Principal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$programs = Program::all();
        $about = About::first();
        $director = Director::first();
        $principal = Principal::first();
        $coordinator = Coordinator::first();
    	$teams = Team::all();

    	return view('frontend.index', compact('programs', 'about', 'director', 'principal','coordinator', 'teams'));
    }

    public function gallery()
    {
    	$images = Gallery::all();

    	return view('frontend.pages.gallery', compact('images'));
    }
}
