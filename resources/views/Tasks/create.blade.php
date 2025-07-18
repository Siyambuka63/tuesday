<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <title>Add Task</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Load Style -->
    <link rel="stylesheet" href="{{ asset('stylesheet/newtask.css') }}">

    <!-- Meta SEO -->
    <meta name="keyword" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="canonical" href="" />

    <!-- HTML5 shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include('partials._header')

    <!-- Task Creation Form -->
    <div class="task-form">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <label for="title">Task Title:</label>
            <input type="text" name="title" required>

            <label for="description">Description:</label>
            <textarea name="description" rows="5"></textarea>

            <label for="assigned_to">Assigned To:</label>
            <input type="text" name="assigned_to">

            <label for="role">Role:</label>
            <input type="text" name="role">

            <label for="status">Status:</label>
            <select name="status">
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
            </select>

            <label for="priority">Priority:</label>
            <select name="priority">
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>

            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date">

            <!-- NEW: Select Board -->
            <label for="board_id">Assign to Board:</label>
            <select name="board_id" required>
                @foreach($boards as $board)
                    <option value="{{ $board->id }}">{{ $board->name }}</option>
                @endforeach
            </select>

            <button type="submit">Create Task</button>
        </form>
    </div>

    <hr>

    <!-- Create New Board -->
    <div class="board-form">
        <form method="POST" action="{{ route('boards.store') }}">
            @csrf
            <label for="name">New Board Name:</label>
            <input type="text" name="name" required>
            <button type="submit">Create New Board</button>
        </form>
    </div>

</body>
</html>