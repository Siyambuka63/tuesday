<?php
namespace App\Http\Controllers;

use App\Models\BoardSF;
use App\Models\TaskSF;
use App\Models\Board;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskControllerSF extends ControllerSF
{
    // Show all tasks
    public function index()
    {
        return view('tasks.index', [
            'tasks' => TaskSF::where('user_id', Auth::id())->latest()->get(),
            'username' => Auth::user()->name,
        ]);
    }

    public function create(){
        return view('tasks.create', [
            'tasks' => TaskSF::where('user_id', Auth::id())->latest()->get(),
            'username' => Auth::user()->name,
            'boards' => BoardSF::where('user_id', Auth::id())->get(),
        ]);
    }

    // Show the form to edit an existing task
    public function show(TaskSF $task)
    {
        return view('tasks.show', [
            'tasks' => TaskSF::where('user_id', Auth::id())->latest()->get(),
            'task' => $task,
            'username' => Auth::user()->name
        ]);
    }

    // Create a new task or update an existing one
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:Open,In Progress,Completed,Cancelled',
            'priority' => 'required|in:Low,Medium,High',
            'board_id' => 'required|exists:boards,id', // Ensure the board exists
        ]);

        $request->merge(['user_id' => Auth::id()]);

        TaskSF::create($request->all());

        return redirect()->route('boards.show', $request->board_id)->with('success', 'Task created successfully!');
    }

    // Update an existing task
    public function update(Request $request, TaskSF $task)
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
    public function destroy(TaskSF $task)
    {
        $task->delete();

        return redirect('/');
    }
}
