<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.team.create');
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
            'name' => 'required',
            'title' => 'required',
            'description' =>'required',
            'role' =>'required',
            'email' => 'required | email | unique:teams',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['title'] = request()->input('title');
        $attributes['role'] = request()->input('role');
        $attributes['email'] = request()->input('email');
        $attributes['description'] = request()->input('description');
        $attributes['facebook'] = request()->input('facebook');
        $attributes['twitter'] = request()->input('twitter');
        $attributes['instagram'] = request()->input('instagram');
        $attributes['linkedin'] = request()->input('linkedin');

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);

            Cloudder::upload($request->file('avatar'), null, array("quality"=>"auto", "fetch_format"=>"auto"));
            $cloundary_upload = Cloudder::getResult();

            $attributes['avatar'] = $cloundary_upload['secure_url'];
        }



        Team::create($attributes);

        request()->session()->flash('message', 'New member was added successfully!');
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
    public function edit(Team $team)
    {
        return view('dashboard.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        request()->validate([
            'name' => 'required',
            'title' => 'required',
            'description' =>'required',
            'role' =>'required',
            'email' => 'required | email',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['title'] = request()->input('title');
        $attributes['role'] = request()->input('role');
        $attributes['email'] = request()->input('email');
        $attributes['description'] = request()->input('description');
        $attributes['facebook'] = request()->input('facebook');
        $attributes['twitter'] = request()->input('twitter');
        $attributes['instagram'] = request()->input('instagram');
        $attributes['linkedin'] = request()->input('linkedin');

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);

            Cloudder::upload($request->file('avatar'), null, array("quality"=>"auto", "fetch_format"=>"auto"));
            $cloundary_upload = Cloudder::getResult();

            $attributes['avatar'] = $cloundary_upload['secure_url'];
        }



        $team->update($attributes);

        request()->session()->flash('message', 'Team member was updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return back();
    }
}
