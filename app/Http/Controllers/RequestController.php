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
        return redirect()->route('show.index');
    }
    public function show()
    {
        $cars = Car::all();
        return view('show.index')
        ->with('cars', $cars);
    }
    public function edit($id)
    {
        $car =Car::find($id);       
        return view('edit.index')
        ->with('id', $id)
        ->with('car', $car);
    }
    public function update($id, CarRequest $request)
    {
        Car::updateOrCreate(['id' => $id], $request->all());
        return redirect()->route('show.index');
    }
    public function delete($id)
    {
        Car::find($id)->delete();
        return redirect()->route('show.index');
    }
}
