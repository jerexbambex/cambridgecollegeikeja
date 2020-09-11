<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('dashboard.result.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.result.create');
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
            'exam_type' => 'required',
            'exam_year' =>'required',
            'subject_1' =>'required',
            'grade_1' => 'required',
            'subject_2' =>'required',
            'grade_2' => 'required',
            'subject_3' =>'required',
            'grade_3' => 'required',
            'exam_number' => 'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['exam_type'] = request()->input('exam_type');
        $attributes['exam_year'] = request()->input('exam_year');
        $attributes['subject_1'] = request()->input('subject_1');
        $attributes['grade_1'] = request()->input('grade_1');
        $attributes['subject_2'] = request()->input('subject_2');
        $attributes['grade_2'] = request()->input('grade_2');
        $attributes['subject_3'] = request()->input('subject_3');
        $attributes['grade_3'] = request()->input('grade_3');
        $attributes['subject_4'] = request()->input('subject_4');
        $attributes['grade_4'] = request()->input('grade_4');
        $attributes['exam_number'] = request()->input('exam_number');

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);

            Cloudder::upload($request->file('avatar'), null, array("quality"=>"auto", "fetch_format"=>"auto"));
            $cloundary_upload = Cloudder::getResult();

            $attributes['avatar'] = $cloundary_upload['secure_url'];
        }



        Result::create($attributes);

        request()->session()->flash('message', 'New result was added successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        return view('dashboard.result.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        request()->validate([
            'name' => 'required',
            'exam_type' => 'required',
            'exam_year' =>'required',
            'subject_1' =>'required',
            'grade_1' => 'required',
            'subject_2' =>'required',
            'grade_2' => 'required',
            'subject_3' =>'required',
            'grade_3' => 'required',
            'exam_number' => 'required',
        ]);

        // dd(request()->all());

        $attributes['name'] = request()->input('name');
        $attributes['exam_type'] = request()->input('exam_type');
        $attributes['exam_year'] = request()->input('exam_year');
        $attributes['subject_1'] = request()->input('subject_1');
        $attributes['grade_1'] = request()->input('grade_1');
        $attributes['subject_2'] = request()->input('subject_2');
        $attributes['grade_2'] = request()->input('grade_2');
        $attributes['subject_3'] = request()->input('subject_3');
        $attributes['grade_3'] = request()->input('grade_3');
        $attributes['subject_4'] = request()->input('subject_4');
        $attributes['grade_4'] = request()->input('grade_4');
        $attributes['exam_number'] = request()->input('exam_number');

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);

            Cloudder::upload($request->file('avatar'), null, array("quality"=>"auto", "fetch_format"=>"auto"));
            $cloundary_upload = Cloudder::getResult();

            $attributes['avatar'] = $cloundary_upload['secure_url'];
        }

        $result->update($attributes);

        request()->session()->flash('message', 'Result was updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return back();
    }
}
