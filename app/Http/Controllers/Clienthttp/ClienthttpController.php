<?php

namespace App\Http\Controllers\Clienthttp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienthttpController extends Controller
{
    public function index()
    {
        return view('clienthttp.index');
    }
}
