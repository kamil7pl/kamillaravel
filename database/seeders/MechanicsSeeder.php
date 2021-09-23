<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mechanic;

class MechanicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mechanics = [
            [
                'name' => 'Jan Kowalski'
            ],
            [
                'name' => 'Michał Nowak'
            ],
            [
                'name' => 'Artur Kowal'
            ],
            [
                'name' => 'Kamil Stojałowski'
            ],
        ];
        foreach($mechanics as $mechanic)
        Mechanic::create($mechanic);
    }
}
