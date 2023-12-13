<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;


class TaskController extends Controller
{
    public function index(Request $request)
    {
        return new TaskResource(Task::all());
    }
}
