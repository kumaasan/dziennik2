<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {

    public function index() {
        $tasks = Task::where('user_id', auth()->id())
          ->where('is_done', false)
          ->orderBy('created_at', 'desc')
          ->get();

        $completedTasks = Task::where('user_id', auth()->id())
          ->where('is_done', true)
          ->orderBy('updated_at', 'desc')
          ->get();

        return view('tasks.task', compact('tasks', 'completedTasks'));
    }

    public function markAsDone(Task $task) {
        if ($task->user_id !== auth()->id()) {
            abort(403);
        }

        $task->is_done = true;
        $task->save();

        return back();
    }

    public function markAsUndone(Task $task) {
        if ($task->user_id !== auth()->id()) {
            abort(403);
        }

        $task->is_done = false;
        $task->save();

        return back();
    }
}
