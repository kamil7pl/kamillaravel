<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User_role;

class Role_usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_roles = [
            [
                'user_id' => 1,
                'role_id' => 2,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ],
            [
                'user_id' => 2,
                'role_id' => 1,
            ],
            [
                'user_id' => 3,
                'role_id' => 1,
            ]
        ];
        foreach($user_roles as $user_role)
        User_role::create($user_role);
    }
}
