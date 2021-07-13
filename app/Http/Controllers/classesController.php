<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grade;

class classesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = grade::all();
        return view('Teacher.Class.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teacher.Class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'faculty' => 'required',
            'class_Name' => 'required',
            'subject' => 'required',
            'start_from' => 'required',
        ]);
        
            $grade = grade::Create([
            'faculty' => $request->input('faculty'),
            'class_Name' => $request->input('class_name'),
            'year' => $request->input('year'),
            'subject' => $request->input('subject'),
            'start_from' => $request->input('start_from'),
            
        ]);
        return redirect('/class');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grades = grade::all();
        return view('Teacher.Class.history', compact('grades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
