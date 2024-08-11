<?php

namespace app\Models;



class TasksModel extends \CodeIgniter\Model
{
  protected $table = 'tasks';

  protected $allowedFields = ['title', 'description', 'created_at'];

  protected $validationRules = [
    'title'         => 'required',
    'description'   => 'required',
  ];

  protected $validationMessages = [
    'title' => [
      'required' => 'Введите заголовок задания',
    ],
    'description' => [
      'required' => 'Добавьте описание задания',
    ],
  ];
}
