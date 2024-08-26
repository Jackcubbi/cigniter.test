<?php

namespace App\Controllers;

use App\Entities\Task;


class Tasks extends BaseController
{

  private $model;

  public function __construct()
  {
    $this->model = new \App\Models\TasksModel();
  }

  //create task controller
  public function index(): string
  {


    $data = $this->model->findAll();

    return view('Tasks/index', ['tasks' => $data]);
  }


  //create show controller
  public function show($id)
  {

    $task = $this->model->find($id);

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

    $task = new Task($this->request->getPost());

    if ($this->model->insert($task)) {
      return redirect()
        ->to('/tasks')
        ->with('success', 'Task created')
        ->with('data', $task);
    } else {

      return redirect()
        ->back()
        ->withInput($task)
        ->with('errors', $this->model->errors());
    }
  }


  //create edit controller
  public function edit($id)
  {
    $task = $this->model->find($id);

    return view('Tasks/edit', ['task' => $task]);
  }


  //create update controller
  public function update($id)
  {
    $task = $this->model->find($id);
    $task->fill($this->request->getPost());

    /* if (! $task->hasChanged()) {
      return redirect()
        ->back()
        ->withInput($task)
        ->with('errors', 'Nothing to update');
    } */

    if ($this->model->save($task)) {
      return redirect()
        ->to('/tasks')
        ->with('success', 'Task updated')
        ->with('data', $task);
    } else {
      return redirect()
        ->back()
        ->withInput($task)
        ->with('errors', $this->model->errors());
    }
  }
}
