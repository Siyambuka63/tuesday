<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::latest()->get()
        ]);
    }

    // Show the form to create a new task
    public function create(){
        return view('tasks.create', [
            'tasks' => Task::latest()->get()
        ]);
    }

    // Show the form to edit an existing task
    public function show(Task $task)
    {
        return view('tasks.show', [
            'tasks' => Task::latest()->get(),
            'task' => $task
        ]);
    }

    // Create a new task or update an existing one
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
        ]);

        // Create a new task with the request data
        Task::create($request->except('_token'));

        // Redirect to the tasks page
        return redirect('/');
    }

    // Update an existing task
    public function update(Request $request, Task $task)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
        ]);

        // Update the task with the request data
        $task->update($request->except('_token'));

        // Redirect to the tasks page
        return redirect('/');
    }

    // Delete an existing task
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/');
    }
}
