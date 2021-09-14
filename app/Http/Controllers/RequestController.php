<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class RequestController extends Controller
{
    public function index()
    {
        return view('form.index');
    }
    public function store(UploadRequest $request)
    {
        if($request->hasFile('img'))
        {
            $path = $request->file('img')->store('WojSlaskieXY');
            return $path;
        }
        else
        return 'Brak pliku.';
    }
}
