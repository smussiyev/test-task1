<?php

namespace App\Http\Controllers\Action;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('action.index');
    }
}
