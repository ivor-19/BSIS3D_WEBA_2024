<?php

class Tasks extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }
    
    $x = new Task();
    $rows = $x->findAll();

    $this->view('tasks/index', [
      'tasks' => $rows
    ]);
  }

  public function create()
  {

    $x = new Task();

    if (count($_POST) > 0) {
        if (!empty($_POST['task_name']) && !empty($_POST['task_description'])) {
            $x->insert($_POST);
            redirect('tasks');
        } else {
            echo "Please fill in all required fields.";
        }
    }

    $this->view('tasks/create');
  }

  public function edit($id)
  {
    $x = new Task();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('tasks');
    }

    $this->view('tasks/edit', [
      'task' => $row
    ]);
  }

  public function delete($id)
  {
    $x = new Task();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->delete($id);

      redirect('tasks');
    }

    $this->view('tasks/delete', [
      'task' => $row
    ]);
  }
}