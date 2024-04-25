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
<style>
    .custom-select {
        display: inline-block;
        width: 200px;
        height: 40px; 
        padding: 8px 12px;
        border: 1px solid #ccc; 
        border-radius: 4px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1); 
        position: relative;
        cursor: pointer; 
        font-size: 16px;
        color: #333; 
        -webkit-appearance: none; 

    }
    .custom-select {
        background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2212%22%20height%3D%227%22%20viewBox%3D%220%200%2012%207%22%20fill%3D%22none%22%20xmlns%3D%22http://www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M1%201L6%206L11%201%22%20stroke%3D%22%23333%22%20stroke-width%3D%222%22%2F%3E%3C%2Fsvg%3E');
        background-repeat: no-repeat;
        background-position: right 10px center; 
        background-size: 12px 7px;
    }
</style>
<?php include PATH . "partials/footer.php" ?>