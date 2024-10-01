<?php


namespace App\Controllers;


class Signup extends BaseController
{
  public function new(): string
  {
    return view('Signup/new');
  }
}
