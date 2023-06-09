<?php

namespace App\Http\Controllers;

use App\Imports\ActivityImport;
use App\Models\Activity;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loggedInUserId = auth()->id();
        $user = User::find($loggedInUserId);

        $tasks = Task::where('user_id', $loggedInUserId)->get();

        return view('activities.index')
            ->with('drivers', $user)
            ->with('tasks', $tasks);
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
        $user_id = Auth::user()->id;
        $task_id = $request->input('task_id');
        $mass = $request->input('mass');
        $time = $request->input('time');

        $distance = rand(1, 100);
        $km = rand(50, 200);
        $cost = rand(100, 1000);
        $status = ['Pending', 'In Progress', 'Completed'][rand(0, 2)];

        // Create a new CameraDetection record
        Activity::create([
            'user_id' => $user_id,
            'task_id' => $task_id,
            'mass' => $mass,
            'time' => $time,
            'distance' => $distance,
            'km' => $km,
            'cost' => $cost,
            'status' => $status,

        ]);

        return redirect()->back()->with('success', 'Activity successfully started');
    }

    /**
     * Display the specified resource.
     */
    public function show($activity)
    {
        $task = Task::find($activity);
        $activity = Activity::where('task_id', $task->id)->first();
        $activityCount = Activity::where('task_id', $task->id)->count();

        return view('activities.show', compact('task', 'activity', 'activityCount'));
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
        $activity = Activity::findOrFail($id);
        $activity->status = $request->input('status');
        $activity->reason = $request->input('reason');
        $activity->save();

        return redirect()->back()->with('success', 'Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
