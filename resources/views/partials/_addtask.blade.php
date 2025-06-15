<div class="modal">
  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
    <div class="header">
        <h1>New Task</h1>
        <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>
        </div>
    <p>Enter the details of the new task</p>
    
    <hr>
    
      <label for="task"><b>Task</b></label>
      <input type="text" placeholder="Enter Task" name="task" required>

      <label for="owner"><b>Owner</b></label>
      <input type="text" placeholder="Enter Owner" name="owner">

      <label for="status"><b>Status</b></label>
      <select name="status" id="status">
        <option value="standby">Open</option>
        <option value="in_progress">In Progress</option>
        <option value="done">Done</option>
        <option value="cancelled">Cancelled</option>
      </select>

      <label for="description">Description</label>
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter description"></textarea>

      <label for="due_date"><b>Due Date</b></label>
      <input type="date" name="due_date" id="due_date">

      <label for="priority"><b>Priority</b></label>
      <select name="priority" id="priority">
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="high">High</option>
      </select>

      <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="addbtn">Add Task</button>
    </div>
    </div>
  </form>
</div>