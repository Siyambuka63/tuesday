<div class="modal">
  <!-- Modal Content -->
  <form class="modal-content animate" action="/tasks" method="POST">
    @csrf
    <div class="container">
    <div class="header">
        <h1>New Task</h1>
        <span onclick="window.location.href='/'"
class="close" title="Close Modal">&times;</span>
        </div>
    <p>Enter the details of the new task</p>
    
    <hr>
    
      <label for="title"><b>Task</b></label>
      <input type="text" placeholder="Enter Title" name="title" required>

      <label for="assigned_to"><b>Owner</b></label>
      <input type="text" placeholder="Enter Owner" name="assigned_to">

      <label for="status"><b>Status</b></label>
      <select name="status" id="status">
        <option value="Open">Open</option>
        <option value="In Progress">In Progress</option>
        <option value="Completed">Completed</option>
        <option value="Cancelled">Cancelled</option>
      </select>

      <label for="description">Description</label>
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter description"></textarea>

      <label for="due_date"><b>Due Date</b></label>
      <input type="date" name="due_date" id="due_date">

      <label for="priority"><b>Priority</b></label>
      <select name="priority" id="priority">
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
      </select>

      <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="window.location.href='/'">Cancel</button>
      <button type="submit" class="addbtn">Add Task</button>
    </div>
    </div>
  </form>
</div>