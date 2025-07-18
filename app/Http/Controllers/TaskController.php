<?php
namespace App\Http\Controllers;

use App\Models\Board;

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
            'username' => Auth::user()->name,
            'boards' => Board::where('user_id', Auth::id())->get(), // <-- add this line
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
            'title' => 'required|string|max:255',
            'status' => 'required|in:Open,In Progress,Completed,Cancelled',
            'priority' => 'required|in:Low,Medium,High',
            'board_id' => 'required|exists:boards,id', // Ensure the board exists
        ]);

        $request->merge(['user_id' => Auth::id()]);

        Task::create($request->all());

        return redirect()->route('boards.show', $request->board_id)->with('success', 'Task created successfully!');
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
