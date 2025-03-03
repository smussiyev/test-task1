<?php

namespace App\Http\Controllers\TestTask;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('testtask.index');
    }
}
