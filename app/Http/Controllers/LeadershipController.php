<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    public function index()
    {
    	$teams =  Team::all();

    	return view('frontend.pages.team.index', compact('teams'));
    }

    public function show(Team $leader)
    {
    	return view('frontend.pages.team.show', compact('leader'));
    }
}
