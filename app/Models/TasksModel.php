<?php

namespace app\Models;

use App\Entities\Task;


class TasksModel extends \CodeIgniter\Model
{
  protected $table = 'tasks';

  protected $allowedFields = ['title', 'description', 'created_at'];

  protected $returnType = \App\Entities\Task::class;

  protected $useEntity = true;



  protected $validationRules = [
    'title'         => 'required',
    'description'   => 'required',
  ];

  protected $validationMessages = [
    'title' => [
      'required'  => 'Введите заголовок задания',
    ],
    'description' => [
      'required'    => 'Добавьте описание задания',
    ],
  ];
}
