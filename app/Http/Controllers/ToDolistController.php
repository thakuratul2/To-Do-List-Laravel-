<?php

namespace App\Http\Controllers;

use App\Models\to_dolist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    public function edit(to_dolist $to_dolist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, to_dolist $to_dolist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(to_dolist $to_dolist)
    {
        //
    }
}
