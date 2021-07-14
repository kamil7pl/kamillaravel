<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientSpotkaniaController extends Controller
{
    public function show()
    {
        return view('klient.spotkania.index');
    }
}
