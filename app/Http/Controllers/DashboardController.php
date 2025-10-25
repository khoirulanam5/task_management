<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTask = Task::where('user_id', auth()->id())->count();
        $taskTodo = Task::where('user_id', auth()->id())->where('status', 'To Do')->count();
        $taskProgress = Task::where('user_id', auth()->id())->where('status', 'In Progress')->count();
        $taskDone = Task::where('user_id', auth()->id())->where('status', 'Done')->count();

        return view('pages.dashboard', compact('totalTask', 'taskTodo', 'taskProgress', 'taskDone'));
    }
}
