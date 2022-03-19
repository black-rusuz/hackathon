<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Levelup;
use App\Models\Topic;
use App\Models\Task;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $levelups = Levelup::all();
        $topics = Topic::all();
        $tasks = Task::all();
    }
}
