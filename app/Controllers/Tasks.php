<?php

namespace App\Controllers;

class Tasks extends BaseController
{

  public function index(): string
  {

    $model = new \App\Models\TasksModel();
    $data = $model->findAll();

    return view('Tasks/index', ['tasks' => $data]);
  }
}
