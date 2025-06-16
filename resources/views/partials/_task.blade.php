<div class="modal">
    <!-- Modal Content -->
    <form class="modal-content animate" action="/action_page.php">
        <div class="container">
            <div class="header">
                <input type="text" placeholder="Enter Task" value="{{ $task['title'] }}" id = "task"
                    required>
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
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
                        <option value="standby" {{ $task['status'] === 'Low' ? 'selected' : '' }}>Open</option>
                        <option value="in_progress" {{ $task['status'] === 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="done" {{ $task['status'] === 'Done' ? 'selected' : '' }}>Done</option>
                        <option value="cancelled" {{ $task['status'] === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>

                    <label for="priority"><b>Priority</b></label>
                    <select name="priority" id="priority">
                        <option value="low" {{ $task['priority'] === 'Low' ? 'selected' : '' }}>Low</option>
                        <option value="medium" {{ $task['priority'] === 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="high" {{ $task['priority'] === 'High' ? 'selected' : '' }}>High</option>
                    </select>

                    <label for="due_date"><b>Due Date</b></label>
                    <input type="date" name="due_date" id="due_date" value="{{ \Illuminate\Support\Str::of($task['due_date'])->before(' ') }}">
                </div>
            </div>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="addbtn">Save Changes</button>
            </div>
        </div>
    </form>
</div>
