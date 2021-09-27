<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin'                
            ],
            [
                'name' => 'user'                
            ]
        ];
        foreach($roles as $role)
        Role::create($role);
    }
}
