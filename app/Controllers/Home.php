<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home/index', [
            'title' => 'Main Page'
        ]);
    }

    public function list(): string
    {
        return view('Home/list', [
            'title' => 'Task list'
        ]);
    }
}
