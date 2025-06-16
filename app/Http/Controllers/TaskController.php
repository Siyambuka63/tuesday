<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all()
        ]);
    }

    public function create(){
        return view('tasks.create', [
            'tasks' => Task::all()
        ]);
    }

    public function show($id)
    {
        return view('tasks.show', [
            'tasks' => Task::all(),
            'task' => Task::findOrFail($id)
        ]);
    }
}
