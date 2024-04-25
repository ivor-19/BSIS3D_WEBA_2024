<?php include PATH . "partials/header.php" ?>

<div class="container">

  <form action="" method="POST" class="mt-5 w-50 mx-auto">
    <h2>Delete User</h2>

    <div class="mb-2">
      <label for="">Task Name</label>
      <input name="task_name" disabled value="<?= $task->task_name ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Description</label>
      <input name="task_description" disabled value="<?= $task->task_description ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Status</label>
      <input name="task_status" disabled value="<?= $task->task_status ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
        <label for="task_date">Due</label>
        <input id="task_date" name="task_date" disabled value="<?= $task->task_due ?>" type="date" class="form-control">
    </div>

    <!--
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" disabled value="<= $task->password ?>" type="password" class="form-control">
    </div>
    !-->
    <input type="hidden" name="id" value="<?= $task->id ?>">
    <button type="submit" class="btn btn-danger">Delete</button>
    <button type="button" class="btn btn-light" onclick="window.location.href='<?= ROOT ?>/tasks'">Cancel</button>
  </form>
  
</div>

<?php include PATH . "partials/footer.php" ?>