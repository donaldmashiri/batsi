<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function reports()
    {
        $usersTotal = User::count();
        $tasksTotal = Task::count();
        $activitiesTotal = Activity::count();

        $tasks = Task::all();
        $activities = Activity::all();

        $reports = Task::join('activities', 'tasks.id', '=', 'activities.task_id')
            ->select('tasks.*')
            ->get();

        return view('reports', compact('usersTotal', 'activitiesTotal','tasks','activities', 'tasksTotal', 'reports'));
    }


}
