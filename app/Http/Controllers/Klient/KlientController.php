<?php

namespace App\Http\Controllers\Klient;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KlientController extends Controller
{
    public function show()
    {
        return view('klient.index');
    }
}
