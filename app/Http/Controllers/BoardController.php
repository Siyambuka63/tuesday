<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Add this line

class BoardController extends Controller
{
    use AuthorizesRequests; // Add this line

    public function create()
    {
        return view('boards.create'); // Ensure this matches the correct view path
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $board = Board::create([
            'name' => $request->name,
            'user_id' => Auth::id(),
        ]);

        // Redirect to the dashboard (boards.index) after creating the board
        return redirect()->route('boards.index')->with('success', 'Board created successfully!');
    }

    public function show(Board $board)
    {
        $this->authorize('view', $board); // Ensure the user owns the board

        $tasks = $board->tasks()->latest()->get(); // Retrieve tasks for the board

        return view('boards.show', compact('board', 'tasks'));
    }

    public function index()
    {
        $boards = Board::where('user_id', Auth::id())->with('tasks')->get(); // Retrieve all boards for the user

        return view('boards.index', compact('boards'));
    }
}