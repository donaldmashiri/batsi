<?php

namespace App\Http\Controllers;

use App\Imports\ActivityImport;
use App\Models\Activity;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('activities.index')->with('activities', Activity::all());
    }

    public function import(Request $request)
    {
        $file = $request->file('file');

        \Maatwebsite\Excel\Facades\Excel::import(new ActivityImport(), $file);

        return back()->withStatus('Excel file imported successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
