<?php

namespace App\Http\Controllers\Admin\Candidate;

use App\Http\Controllers\Controller;

use App\Models\Candidate;

class IndexController extends Controller
{
    public function __invoke()
    {
        $candidate = Candidate::all();
        return view ('user');
    }
}
