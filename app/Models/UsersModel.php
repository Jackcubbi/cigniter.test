<?php

namespace app\Models;

use App\Entities\User;


class UsersModel extends \CodeIgniter\Model
{
  protected $table = 'user';

  protected $useTimestamps = true;

  protected $allowedFields = ['name', 'email'];

  protected $returnType = \App\Entities\User::class;
}
