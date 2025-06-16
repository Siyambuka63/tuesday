@props(['task'])

@php
                                    $colour = match($task['priority']) {
                                        'High' => 'blue',
                                        'Medium' => 'red',
                                        'Low' => 'green',
                                        default => 'grey'
                                    };
                                    @endphp
<li class="el" onclick="window.location.href='/tasks/{{ $task['id'] }}'">
    <div class="task {{ $colour }}">
        <header>
            <h3>{{ $task['title'] }}</h3>
            <span class="icon flaticon-link"></span>
        </header>
        <div class="task-content">
            {{ $task['description'] }}
        </div>
    </div>
