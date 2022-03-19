<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Controllers\Controller;
use App\Models\Levelup;
use App\Models\Task;
use App\Models\Topic;

class CreateController extends Controller
{
    public function __invoke()
    {
        $levelups = Levelup::all();
        $topics = Topic::all();
        $task = Task::all();
    }
}
