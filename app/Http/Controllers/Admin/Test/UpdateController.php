<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Test;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Test  $test)
    {
        $data = $request->validated();
        $test->update($data);

    }
}
