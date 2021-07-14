<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientProfilController extends Controller
{
    public function show()
    {
        return view('klient.profil.index');
    }
}
