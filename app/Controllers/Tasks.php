<?php

namespace App\Controllers;

class Tasks extends BaseController
{
  //create task controller
  public function index(): string
  {

    $model = new \App\Models\TasksModel();
    $data = $model->findAll();

    return view('Tasks/index', ['tasks' => $data]);
  }


  //create show controller
  public function show($id)
  {
    $model = new \App\Models\TasksModel();
    $task = $model->find($id);

    if ($task === null) {
      # code... Проверка по ид
    }

    return view('Tasks/show', ['task' => $task]);
  }


  //create new task controller
  public function add_task()
  {
    return view('Tasks/add_task');
  }


  //create new store controller
  public function store()
  {
    $model = new \App\Models\TasksModel();

    $result = $model->insert([
      'title' => $this->request->getPost('title'),
      'description' => $this->request->getPost('description'),
      'created_at' => $this->request->getPost('created_at')
    ]);

    if (!$result) {
      return redirect()->back()->with('errors', $model->errors());
    } else {
      dd($result);
    }
  }
}
