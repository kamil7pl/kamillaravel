<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserHasRole;

class UserHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userHasRole = [
            [
                'user_id' => 1,
                'role_id' => 2
            ],
            [
                'user_id' => 2,
                'role_id' => 1
            ],
            [
                'user_id' => 2,
                'role_id' => 2
            ],
            [
                'user_id' => 3,
                'role_id' => 1
            ],
            [
                'user_id' => 3,
                'role_id' => 2
            ]
        ];
        foreach($userHasRole as $u)
        UserHasRole::create($u);
    }
}
