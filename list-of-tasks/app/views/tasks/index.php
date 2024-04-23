<?php include PATH . "partials/header.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List of Tasks</h2>
    <a href="<?= ROOT ?>/tasks/create" class="btn btn-primary">Add New</a>
  </div>

  <table class= "table table-hover">
    <thead class = table-dark>
      <tr>
          <th>Task Name</th>
          <th>Task Description</th>
          <th>Task Status</th>
          <th>Due</th>
          <th></th>
      </tr>
    </thead>   
    <?php if ($tasks != null) { ?>
      <?php foreach ($tasks as $item) { ?>
        <tbody>


          <tr>
            <td><?= $item->task_name ?></td>
            <td><?= $item->task_description ?></td>
            <td><?= $item->task_status ?></td>
            <td><?= $item->task_due ?></td>
            <td>
              <a href="<?= ROOT ?>/tasks/edit/<?= $item->id ?>" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg></a>
              <a href="<?= ROOT ?>/tasks/delete/<?= $item->id ?>" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg></a>
            </td>
          </tr>
        </tbody>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h3>No record found.</h3>
        </td>
      </tr>
    <?php } ?>
  </table>

</div>

<?php include PATH . "partials/footer.php" ?>