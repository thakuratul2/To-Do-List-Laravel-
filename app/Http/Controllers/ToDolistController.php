<?php

namespace App\Http\Controllers;

use App\Models\to_dolist;

use Illuminate\Http\Request;


class ToDolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome')->with('fetch_arr',to_dolist::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       return view('create_data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dd_data = new to_dolist();
        $dd_data->name = $request->input('name');
        $dd_data->email = $request->input('email');
        $dd_data->save();
        //dd($dd_data);
       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(to_dolist $to_dolist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(to_dolist $to_dolist,$id)
    {
        //
        $edit_tt = to_dolist::find($id);
        return view('/edit_list')->with('fetch_arr',$edit_tt);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, to_dolist $to_dolist,$id)
    {
        //
        $dd_data = to_dolist::find($id);
        $dd_data->name = $request->input('name');
        $dd_data->email = $request->input('email');
        $dd_data->save();
        //dd($dd_data);
       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(to_dolist $to_dolist,$id)
    {
        //
        to_dolist::destroy($id);
        return redirect('/');

    }
}
