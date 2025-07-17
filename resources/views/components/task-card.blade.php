@props(['task'])

@php
    $colour = match ($task['priority']) {
        'High' => 'red',
        'Medium' => 'yellow',
        'Low' => 'green',
        default => 'grey',
    };
@endphp
<li class="el" onclick="window.location.href='/tasks/{{ $task['id'] }}'">
    <div class="task {{ $colour }}">
        <header>
            <h3>{{ $task['title'] }}</h3>
            <form action="/tasks/{{$task->id}}" method="POST" style="display:flex;">
                @csrf
                @method('DELETE')
                <button type="submit" style="border:none; background:none; cursor:pointer;">
                    <span class="icon flaticon-garbage-2"></span>
                </button>
            </form>
        </header>
        <div class="task-content">
            {{ $task['description'] }}
            
        </div>
    </div>
