<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Controller;

use App\Models\Test;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tests = Test::all();
        dd($tests);
    }
}
