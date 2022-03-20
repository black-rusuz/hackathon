<?php

namespace App\Http\Controllers\Admin\Candidate;
use App\Http\Controllers\Controller;
use App\Models\Candidate;

class ShowController extends Controller
{
    public function __invoke(Candidate $session)
    {
//        return view('admin.test.show', compact('test')); //сослаться на нужную вьюшку
    }
}
