<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::all();
        return $tasks;
    }
}
