<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Levelup;
use App\Models\Topic;

class EditController extends Controller
{
    public function __invoke(Task $task)
    {
        $levelups = Levelup::all();
        $topics = Topic::all();
        $tasks = Task::all();
    }
}
