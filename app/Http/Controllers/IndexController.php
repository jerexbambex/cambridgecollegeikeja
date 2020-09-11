<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$programs = Program::all();

    	return view('frontend.index', compact('programs'));
    }
}
