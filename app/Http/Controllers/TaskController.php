<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::where('user_id', auth()->user()->user_id)->orderBy('deadline', 'asc');

        if ($request->has('status') && $request->status != '') {
            $task->where('status', $request->status);
        }
        
        $tasks = $task->get();

        return view('pages.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:tasks,title',
            'description' => 'nullable|string',
            'status' => 'required|in:To Do,In Progress,Done',
            'deadline' => 'required|date'
        ]);

        Task::create([
            'user_id' => auth()->user()->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'deadline' => $request->deadline,
            'created_by' => auth()->user()->name
        ]);

        return redirect()->route('task.index')->with('pesan', 'Task berhasil ditambahkan');
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
    public function edit(Task $task)
    {
        return view('pages.task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|unique:tasks,title,' . $task->task_id . ',task_id',
            'description' => 'nullable|string',
            'status' => 'required|in:To Do,In Progress,Done',
            'deadline' => 'required|date'
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'deadline' => $request->deadline
        ]);

        return redirect()->route('task.index')->with('pesan', 'Task berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('pesan', 'Task berhasil dihapus');
    }
}
