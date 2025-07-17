<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::where('user_id', Auth::id())->latest()->get(),
            'username' => Auth::user()->name
        ]);
    }

    public function create(){
        return view('tasks.create', [
            'tasks' => Task::where('user_id', Auth::id())->latest()->get(),
            'username' => Auth::user()->name
        ]);
    }

    // Show the form to edit an existing task
    public function show(Task $task)
    {
        return view('tasks.show', [
            'tasks' => Task::where('user_id', Auth::id())->latest()->get(),
            'task' => $task,
            'username' => Auth::user()->name
        ]);
    }

    // Create a new task or update an existing one
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required'
        ]);

        //Add the user_id to the request data
        $request->merge(['user_id' => Auth::id()]);

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
            'title' => 'required'
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
