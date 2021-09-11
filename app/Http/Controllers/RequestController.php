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
        //dd($request->all());
        $car = new Car($request->all());
        //dd(request()->hasFile('image'));
        $path = $request->file('image')->store('kamFour');
        $car->image_path = $path;
        $car->save();
        return view('request.index');
    }
}
