<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Models\Car;

class RequestController extends Controller
{
    public function index()
    {
        return view('form.index');
    }
    public function store(CarRequest $request)
    {
        $car = new Car($request->all());
        $car->save();
        return view('request.index');
    }
}
