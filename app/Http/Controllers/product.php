<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return"data stored successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return"you are on show page for id: $id"; 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return"you are on edit page for id: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return"data updated successfully for id: $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
