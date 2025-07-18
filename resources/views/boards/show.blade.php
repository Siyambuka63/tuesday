@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $board->name }}</h1>
    <div class="actions">
        <a href="{{ route('tasks.create', ['board_id' => $board->id]) }}" class="btn btn-primary">New Task</a>
        <a href="{{ route('boards.create') }}" class="btn btn-secondary">New Board</a>
    </div>
    <div class="dashboard">
        <div class="row">
            @php
                $groupedTasks = collect($tasks)->groupBy('status');
                $orderedStatuses = ['Open', 'In Progress', 'Completed', 'Cancelled'];
            @endphp

            @if($tasks->isEmpty())
                <p>No tasks available for this board. Click "New Task" to add tasks.</p>
            @else
                @foreach ($orderedStatuses as $status)
                    @php
                        $taskGroup = $groupedTasks->get($status);

                        if (!$taskGroup) continue;

                        $colour = match ($status) {
                            'Open' => 'yellow',
                            'In Progress' => 'blue',
                            'Cancelled' => 'red',
                            'Completed' => 'green',
                            default => 'grey',
                        };
                    @endphp
                    <div class="col-xl-3 col-sm-6">
                        <article class="board {{ $colour }}">
                            <header>
                                <h4>{{ ucfirst($status) }} <span>({{ $taskGroup->count() }})</span></h4>
                            </header>
                            <div class="board-content">
                                <ul class="list">
                                    @foreach ($taskGroup as $task)
                                        <x-task-card :task="$task" />
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection