<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role_user;

class RolesUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_users = [
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
                'role_id' => 2                
            ],
            [
                'user_id' => 3,
                'role_id' => 1                
            ],
        ];
        foreach($roles_users as $role_user)
        Role_user::create($role_user);

    }
}
