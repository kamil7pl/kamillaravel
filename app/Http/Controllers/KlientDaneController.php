<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientDaneController extends Controller
{
    public function show()
    {
        return view('front.klient.dane.index');
    }
}
