<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelcollectiveController extends Controller
{
    public function index()
    {
        return view('laravelcollective.index');
    }
    public function show()
    {
        return view('laravelcollectivepost.index');
    }
}