<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreRequest;
use App\Models\Task;
use App\Models\Test;

class StoreController extends Controller
{

   public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $task = Task::FirstOrCreate([
            'title' => $data['title'],
            'description' => $data['description'],
            'variant_1' => $data['variant_1'],
            'variant_2' => $data['variant_2'],
            'variant_3' => $data['variant_3'],
            'variant_4' => $data['variant_4'],
            'answer' => $data['answer'],
        ]);
        return redirect()->route('admin.task.index');
        
    }
}