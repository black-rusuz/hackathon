<?php

namespace App\Http\Controllers;


class RootController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}
