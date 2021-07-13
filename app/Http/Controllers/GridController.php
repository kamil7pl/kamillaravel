<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GridController extends Controller
{
    public function show()
    {
        return view('grid.index');
    }
}
