<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequest;
use App\Models\Levelup;
use App\Models\Task;
use App\Models\Topic;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $levelups = Levelup::all();
        $topics = Topic::all();
        $task = Task::all();
        return view('admin');
    }
}
