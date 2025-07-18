@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <div class="actions">
        <a href="{{ route('boards.create') }}" class="btn btn-secondary">New Board</a>
    </div>
    <div class="dashboard">
        <div class="row">
            @foreach ($boards as $board)
                <div class="col-xl-3 col-sm-6">
                    <article class="board">
                        <header>
                            <h4>{{ $board->name }} <span>({{ $board->tasks->count() }} tasks)</span></h4>
                            <a href="{{ route('boards.show', $board->id) }}" class="btn btn-primary">View Board</a>
                        </header>
                        <div class="board-content">
                            <ul class="list">
                                @foreach ($board->tasks as $task)
                                    <li>{{ $task->title }} - {{ $task->status }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection