<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientWiadomosciController extends Controller
{
    public function show()
    {
        return view('front.klient.wiadomosci.index');
    }
}
