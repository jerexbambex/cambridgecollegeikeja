<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
   	public function index()
    {
        $programs = Program::all();

        return view('frontend.pages.programs.index', compact('programs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        $programs = Program::where('id', '!=', $program->id)->get();

        return view('frontend.pages.programs.show', compact('program', 'programs'));
    }
}
