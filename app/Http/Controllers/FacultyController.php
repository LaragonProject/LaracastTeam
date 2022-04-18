<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('admin.addfacultyform');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addfacultyform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([

            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:15',
            'experience' => 'required|numeric|min:2',
            'dob' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'qualifications' => 'required',
            'specialization' => 'required',
        ]);

        $query =DB::table('faculty')->insert([
            'email'->$_request->input('email'),
            'password'->$_request->input('password'),
            'experience'->$_request->input('experience'),
            'dob'->$_request->input('dob'),
            'fullname'->$_request->input('fullname'),
            'department'->$_request->input('department'),
            'qualifications'->$_request->input('qualifications'),
            'specialization'->$_request->input('specialization'),
            
        ])
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