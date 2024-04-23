<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Edit Tasks</h2>

        <div class="mb-2">
            <label for="">Task Name</label>
            <input name="task_name" value="<?= $task->task_name ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Description</label>
            <input name="task_description" value="<?= $task->task_description ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Task Status</label>
            <select id="task_status" name="task_status" class="custom-select">
                <option value="Not Finished" <?= $task->task_status == 'Not Finished' ? 'selected' : '' ?>>Not Finished</option>
                <option value="Finished" <?= $task->task_status == 'Finished' ? 'selected' : '' ?>>Finished</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="task_date">Due</label>
            <input id="task_due" name="task_due" value="<?= $task->task_due ?>" type="date" class="form-control">
        </div>
        <!--
         <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<$task->password ?>" type="text" class="form-control">
        </div>
        -->
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-light" onclick="window.location.href='<?= ROOT ?>/tasks'">Cancel</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>