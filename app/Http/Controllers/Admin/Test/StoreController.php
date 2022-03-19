<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreRequest;
use App\Models\Test;

class StoreController extends Controller
{

   public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $test = Test::FirstOrCreate([
            'title' => $data['title'],
            'time' => $data['time'],
            'levelup_id' => $data['levelup_id'],
            'topic_id' => $data['topic_id'],
        ]);
        return redirect()->route('admin.test.index');
        
    }
}