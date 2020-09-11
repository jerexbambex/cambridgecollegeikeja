<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();

        return view('dashboard.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required | unique:programs',
            'description' =>'required',
            'body' =>'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['description'] = request()->input('description');
        $attributes['body'] = request()->input('body');

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);

            Cloudder::upload($request->file('avatar'), null, array("quality"=>"auto", "fetch_format"=>"auto"));
            $cloundary_upload = Cloudder::getResult();

            $attributes['avatar'] = $cloundary_upload['secure_url'];
        }



        Program::create($attributes);

        request()->session()->flash('message', 'The new program was added successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('dashboard.program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        request()->validate([
            'name' => 'required',
            'description' =>'required',
            'body' =>'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['description'] = request()->input('description');
        $attributes['body'] = request()->input('body');

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);

            Cloudder::upload($request->file('avatar'), null, array("quality"=>"auto", "fetch_format"=>"auto"));
            $cloundary_upload = Cloudder::getResult();

            $attributes['avatar'] = $cloundary_upload['secure_url'];
        }

        $program->update($attributes);

        request()->session()->flash('message', 'The program was updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();

        return back();
    }
}
