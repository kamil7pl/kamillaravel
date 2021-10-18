<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Models\Car;

class RequestController extends Controller
{
    public function index($slug)
    {        
        return view('form.index')
        ->with('sl', $slug);
    }
    /*public function store(CarRequest $request)
    {
        $car = new Car($request->all());
        $car->save();
        return view('request.index');
    }*/
    public function update($sl, CarRequest $request)
    {
        //dd($request->all());
        //dd($sl);
        $cars = Car::updateOrCreate(['id' => $sl], $request->all());
        return 'Zaktualizowano'.$sl;
    }
}
