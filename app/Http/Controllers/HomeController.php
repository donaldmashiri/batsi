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

    public function deliveryNote()
    {
        return view('deliveryNote')->with('tasks', Task::all());
    }

    public function notify()
    {
        $tasks = Task::all();
//        $activities = Activity::all();
        $activities = Activity::where('status', '!=', 'Delivered')->get();

        return view('notify', compact('tasks', 'activities'));
    }

//    public function search(Request $request)
//    {
//        $searchTerm = $request->input('search');
//
//        $activities = Task::where(function ($query) use ($searchTerm) {
//            $query->where('customer_phone', 'like', '%' . $searchTerm . '%')
//                ->orWhere('customer_names', 'like', '%' . $searchTerm . '%');
//        })
//            ->get();
//
//        $tasks = Task::all();
//
//        return view('reportsSearch', compact('activities', 'tasks'));
//    }


    public function reports()
    {
        $usersTotal = User::count();
        $tasksTotal = Task::count();
        $activitiesTotal = Activity::count();

//        $tasks = Task::all();
//        $activities = Activity::all();

        $tasks = Task::paginate(1);
        $activities = Activity::paginate(1);

        $reports = Task::join('activities', 'tasks.id', '=', 'activities.task_id')
            ->select('tasks.*')
            ->get();

        return view('reports', compact('usersTotal', 'activitiesTotal','tasks','activities', 'tasksTotal', 'reports'));
    }


}
