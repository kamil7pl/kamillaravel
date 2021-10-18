<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubpageoneController extends Controller
{
    public function show()
    {
        return view('subpageone.index');
    }
}
