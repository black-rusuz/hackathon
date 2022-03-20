<?php

namespace App\Http\Controllers\Admin\Test;
use App\Http\Controllers\Controller;
use App\Models\Test;

class ShowController extends Controller
{
    public function __invoke(Test $test)
    {
        return view('admin.test.show', compact('test')); //сослаться на нужную вьюшку
    }
}
