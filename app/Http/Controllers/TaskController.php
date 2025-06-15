<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [
                [
                    'id' => 1,
                    'task' => 'Complete the project documentation',
                    'status' => 'In Progress',
                    'created_at' => '2023-10-01 10:00:00',
                    'updated_at' => '2023-10-02 12:00:00',
                    'assigned_to' => 'John Doe',
                    'priority' => 'High',
                    'due_date' => '2023-10-15',
                    'description' => 'This task involves completing the documentation for the project, including setup instructions, usage guidelines, and API references.',
                ],
                [
                    'id' => 2,
                    'task' => 'Fix the bug in the login feature',
                    'status' => 'Open',
                    'created_at' => '2023-10-03 09:30:00',
                    'updated_at' => '2023-10-04 11:00:00',
                    'assigned_to' => 'Jane Smith',
                    'priority' => 'Medium',
                    'due_date' => '2023-10-10',
                    'description' => 'There is a bug in the login feature that prevents users from logging in with their credentials. This needs to be fixed as soon as possible.',
                ],
                [
                    'id' => 3,
                    'task' => 'Review the pull request for the new feature',
                    'status' => 'Completed',
                    'created_at' => '2023-10-05 14:20:00',
                    'updated_at' => '2023-10-06 15:30:00',
                    'assigned_to' => 'Alice Johnson',
                    'priority' => 'Low',
                    'due_date' => '2023-10-12',
                    'description' => 'The new feature has been implemented and is ready for review. Please check the code quality and functionality before merging.',
                ],
                [
                    'id' => 4,
                    'task' => 'Update the user interface design',
                    'status' => 'In Progress',
                    'created_at' => '2023-10-07 08:15:00',
                    'updated_at' => '2023-10-08 09:45:00',
                    'assigned_to' => 'Bob Brown',
                    'priority' => 'High',
                    'due_date' => '2023-10-20',
                    'description' => 'The user interface needs to be updated to improve usability and aesthetics. This includes changes to the layout, colors, and fonts.',
                ],
                [
                    'id' => 5,
                    'task' => 'Prepare for the upcoming team meeting',
                    'status' => 'Cancelled',
                    'created_at' => '2023-10-09 13:00:00',
                    'updated_at' => '2023-10-10 14:30:00',
                    'assigned_to' => 'Charlie Davis',
                    'priority' => 'Medium',
                    'due_date' => '2023-10-18',
                    'description' => 'Gather all necessary materials and prepare an agenda for the team meeting scheduled for next week.',
                ]
    ];

    public function index()
    {
        return view('tasks.index', [
            'tasks' => $this->tasks
        ]);
    }

    public function create(){
        return view('tasks.create', [
            'tasks' => $this->tasks
        ]);
    }

    public function show($id)
    {
        $task = collect($this->tasks)->firstWhere('id', $id);
        if (!$task) {
            abort(404);
        }
        return view('tasks.show', ['task' => $task]);
    }
}
