<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'rocznik' => 2010,
            'typ-silnika' => 'benzynowy',
            'pojemnosc-silnika' => 5204,
            'typ-nadwozia' => 'coupe',
            'liczba-miejsc' => 2,
            'przebieg' => 25185,
            'moc-silnika' => 525,
            'skrzynia-biegow' => 'automatyczna',
            'kolor' => 'biały'
        ]);
    }
}
