<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $this->command->info("\nRebuild users table");

        $users = [
        	['name' => 'elizabeth', 'email' => 'elizabeth@gov.my', 'password' => bcrypt('elizabeth'), 'hospital_id' => '1'],
        ];

        foreach($users as $key => $user)
            User::create($user);

        // user id = 1, hospital queen elizabeth
        $user = User::find(1);

        // role id = 2, admin hospital
        $role = Role::find(2);

        $user->attachRole($role);
    }
}
