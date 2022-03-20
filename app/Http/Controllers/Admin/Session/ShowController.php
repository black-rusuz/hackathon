<?php

namespace App\Http\Controllers\Admin\Session;
use App\Http\Controllers\Controller;
use App\Models\Session;

class ShowController extends Controller
{
    public function __invoke(Session $session)
    {
//        return view('admin.test.show', compact('test')); //сослаться на нужную вьюшку
    }
}
