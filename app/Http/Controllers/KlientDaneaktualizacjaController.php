<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientDaneaktualizacjaController extends Controller
{
    public function show()
    {
        return view('front.klient.dane.aktualizacja.index');
    }
}
