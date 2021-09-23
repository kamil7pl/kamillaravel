<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;

class OwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owners = [
            [
                'name' => 'Krzysztof Jerzy',
                'car_id' => 3
            ],
            [
                'name' => 'Aleksandra Nowakowicz',
                'car_id' => 4
            ],
            [
                'name' => 'Krzysztof Jerzy',
                'car_id' => 5
            ],
            [
                'name' => 'Marcin Kowalewicz',
                'car_id' => 1
            ],
            [
                'name' => 'Kamil Nowakiewicz',
                'car_id' => 2
            ]
        ];
        foreach($owners as $owner)
        Owner::create($owner);
    }
}
