<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index')->with('tasks', Task::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create')->with('drivers', User::whereNull('role')->orWhere('role', '')->get());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_names' => ['required', 'max:255'],
            'customer_phone' => ['required', 'digits:10', 'max:255'],
            'depot' => ['required', 'max:255'],
            'shipment_date' => ['required', 'max:255'],
            'shipment_status' => ['required', 'max:255'],
            'origin_address' => ['required', 'max:255'],
            'destination_address' => ['required', 'max:255'],
            'driver_id' => ['required', 'max:255'],
        ]);

//        $randomDriverId = User::inRandomOrder()->pluck('id')->first();

        Task::create([
            "customer_names" => request('customer_names'),
            "customer_phone" => request('customer_phone'),
            "driver_id" => request('driver_id'),
            "depot" => request('depot'),
            "shipment_date" => request('shipment_date'),
            "shipment_status" => request('shipment_status'),
            "origin_address" => request('origin_address'),
            "destination_address" => request('destination_address'),
        ]);

        return redirect()->back()->with('success', 'Task Successfully Created.');
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
