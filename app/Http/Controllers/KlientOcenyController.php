<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientOcenyController extends Controller
{
    public function show()
    {
        return view('front.klient.oceny.index');
    }
}
