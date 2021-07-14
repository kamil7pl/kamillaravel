<?php

namespace App\Http\Controllers\Klient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KlientProfilController extends Controller
{
    public function show()
    {
        return view('klient.profil.index');
    }
}
