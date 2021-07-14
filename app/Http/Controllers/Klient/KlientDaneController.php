<?php

namespace App\Http\Controllers\Klient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KlientDaneController extends Controller
{
    public function show()
    {
        return view('klient.dane.index');
    }
}
