<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable =[
        'rocznik',
        'typ-silnika',
        'pojemnosc-silnika',
        'typ-nadwozia',
        'liczba-miejsc',
        'przebieg',
        'moc-silnika',
        'skrzynia-biegow',
        'kolor'
    ];
}
