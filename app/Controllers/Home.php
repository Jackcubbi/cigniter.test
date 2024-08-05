<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home/index');
    }

    public function list(): string
    {
        return view('Home/list');
    }
}
