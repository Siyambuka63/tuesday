<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::latest()->get()
        ]);
    }

    public function create()
    {
        return view('tasks.create', [
            'tasks' => Task::latest()->get()
        ]);
    }

    public function show(Task $task)
    {
        return view('tasks.show', [
            'tasks' => Task::latest()->get(),
            'task' => $task
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'role' => 'nullable|string', // Add validation for "role"
        ]);

        Task::create($request->except('_token'));

        return redirect('/');
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'role' => 'nullable|string', // Add validation for "role"
        ]);

        $task->update($request->except('_token'));

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/');
    }
}
