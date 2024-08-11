<?php

namespace app\Models;



class TasksModel extends \CodeIgniter\Model
{
  protected $table = 'tasks';

  protected $allowedFields = ['title', 'description', 'created_at'];
}
