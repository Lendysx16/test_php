<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Task::all());
    }
}
