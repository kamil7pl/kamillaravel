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
        Car::create([
        'rocznik' => $request->get('rocznik'),
        'typ-silnika' => $request->get('typ-silnika'),
        'pojemnosc-silnika' => $request->get('pojemnosc-silnika'),
        'typ-nadwozia' => $request->get('typ-nadwozia'),
        'liczba-miejsc' => $request->get('liczba-miejsc'),
        'przebieg' => $request->get('przebieg'),
        'moc-silnika' => $request->get('moc-silnika'),
        'skrzynia-biegow' => $request->get('skrzynia-biegow'),
        'kolor' => $request->get('kolor')
        ]);
        return view('request.index');
    }
}
