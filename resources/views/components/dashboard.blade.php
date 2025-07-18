@props(['tasks'])

@php
    $groupedTasks = collect($tasks)->groupBy('status');
    $orderedStatuses = ['Open', 'In Progress', 'Completed', 'Cancelled'];
@endphp

<div class="dashboard">
    <div class="row">
        @foreach ($orderedStatuses as $status)
            @php
                $taskGroup = $groupedTasks->get($status);

                // Skip if there are no tasks in this group
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
                        <span class="icon flaticon-more-1"></span>
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
    </div>
