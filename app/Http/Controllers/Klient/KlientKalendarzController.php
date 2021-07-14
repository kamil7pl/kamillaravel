<?php

namespace App\Http\Controllers\Klient;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KlientKalendarzController extends Controller
{
    public function show()
    {
        return view('klient.kalendarz.index');
    }
}
