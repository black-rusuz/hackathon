<?php

namespace App\Http\Controllers\Admin\Session;

use App\Http\Controllers\Controller;

use App\Models\Session;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sessions = Session::all();
        dd($tests);
    }
}
