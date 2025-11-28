<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {

    public function index() {
        $tasks = Task::with('user')->where('user_id',auth()->user()->id)->get();
        return view('tasks.task', compact('tasks'));
    }
}