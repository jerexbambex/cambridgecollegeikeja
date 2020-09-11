<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	// dd('Hello Admin');
    	return view('dashboard.index');
    }
}
