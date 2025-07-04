<div class="modal">
    <!-- Modal Content -->
    <form class="modal-content animate" action="/tasks/{{$task->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="header">
                <input type="text" placeholder="Enter Title" value="{{ $task['title'] }}" id = "task" name = "title"
                    required>
                <span onclick="window.location.href='/'" class="close"
                    title="Close Modal">&times;</span>
            </div>
            <hr>
            <div class = "form-group">
                <div class = "right">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter description">{{ $task['description'] }}</textarea>

                    <label for="owner"><b>Owner</b></label>
                    <input type="text" placeholder="Enter Owner" name="owner" value="{{ $task['assigned_to'] }}">
                </div>
                
                <div class = "left">
                    <label for="status"><b>Status</b></label>
                    <select name="status" id="status">
                        <option value="Open" {{ $task['status'] === 'Low' ? 'selected' : '' }}>Open</option>
                        <option value="In Progress" {{ $task['status'] === 'In Progress' ? 'selected' : '' }}>In
                            Progress</option>
                        <option value="Completed" {{ $task['status'] === 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Cancelled" {{ $task['status'] === 'Cancelled' ? 'selected' : '' }}>Cancelled
                        </option>
                    </select>

                    <label for="priority"><b>Priority</b></label>
                    <select name="priority" id="priority">
                        <option value="Low" {{ $task['priority'] === 'Low' ? 'selected' : '' }}>Low</option>
                        <option value="Medium" {{ $task['priority'] === 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="High" {{ $task['priority'] === 'High' ? 'selected' : '' }}>High</option>
                    </select>

                    <label for="due_date"><b>Due Date</b></label>
                    <input type="date" name="due_date" id="due_date"
                        value="{{ \Illuminate\Support\Str::of($task['due_date'])->before(' ') }}">
                </div>
            </div>

            <div class="clearfix">
                <button type="button" class="cancelbtn" onclick="window.location.href='/'">Cancel</button>
                <button type="submit" class="addbtn">Save Changes</button>
            </div>
        </div>
    </form>
</div>
