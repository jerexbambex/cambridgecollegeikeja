<?php

namespace App\Http\Controllers;

use App\Team;
use App\About;
use App\Gallery;
use App\Program;
<<<<<<< HEAD
use App\Principal;
=======
use App\Director;
use App\Principal;
use App\Coordinator;
>>>>>>> 55d17ae45fb20feb9aa1608d6b47b01acfb0345e
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
<<<<<<< HEAD
=======
   
>>>>>>> 55d17ae45fb20feb9aa1608d6b47b01acfb0345e
    }

    public function gallery()
    {
    	$images = Gallery::all();

    	return view('frontend.pages.gallery', compact('images'));
    }
}
