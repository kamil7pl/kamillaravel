<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;

class RequestController extends Controller
{
    public function index()
    {
        return view('form.index');
    }
    public function store(CarRequest $request)
    {
        return view('request.index');
    }
}
