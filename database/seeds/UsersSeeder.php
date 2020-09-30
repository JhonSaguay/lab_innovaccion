<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\RoleUser;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 3)->create();

        $usersRoles = [
            ['user_id' => 1, 'role_id' => 1],
            ['user_id' => 2, 'role_id' => 1],
            ['user_id' => 2, 'role_id' => 2],
            ['user_id' => 3, 'role_id' => 1],
            ['user_id' => 3, 'role_id' => 2],
            ['user_id' => 3, 'role_id' => 3]
        ];
        foreach($usersRoles as $ur){
          RoleUser::create($ur);
        }
    }
}
