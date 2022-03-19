<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Task;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Task  $task)
    {
        $data = $request->validated();
        $task->update($data);

    }
}
