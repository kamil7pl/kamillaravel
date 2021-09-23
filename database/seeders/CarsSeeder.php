<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'brand' => 'Volvo',
                'model' => 'S60',
                'mechanic_id' => 2
            ],
            [
                'brand' => 'Volvo',
                'model' => 'S40',
                'mechanic_id' => 2
            ],
            [
                'brand' => 'Peugeot',
                'model' => 'Partner',
                'mechanic_id' => 1
            ],
            [
                'brand' => 'Citroen',
                'model' => 'Berlingo',
                'mechanic_id' => 3
            ],
            [
                'brand' => 'Skoda',
                'model' => 'Octavia',
                'mechanic_id' => 4
            ]
        ];
        foreach($cars as $car)
        Car::create($car);
    }
}
