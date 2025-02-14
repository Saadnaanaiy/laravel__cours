<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competitions = Competition::all();
        return view("competitions.index", compact("competitions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("competitions.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Competition::create($request->all());
        return redirect()->route("competitions.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Competition $competition)
    {
        return view("competitions.show", compact("competition"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competition $competition)
    {
        return view("competitions.edit", compact("competition"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Competition $competition)
    {
        $competition->update($request->all());
        return redirect()->route("competitions.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competition $competition)
    {
        $competition->delete();
        return redirect()->route("competitions.index");
    }
}
