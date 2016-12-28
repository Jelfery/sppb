<?php

use Illuminate\Database\Seeder;
use App\User;

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
        	['name' => 'tawau', 'email' => 'tawau@gov.my', 'password' => bcrypt('tawau'), 'hospital_id' => '5'],
        	['name' => 'sandakan', 'email' => 'sandakan@gov.my', 'password' => bcrypt('sandakan'), 'hospital_id' => '4'],
        ];

        foreach($users as $key => $user)
            User::create($user);
    }
}
