<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        $this->command->info("\nRebuild roles table");

        $roles = [
        	['name' => 'Admin Hospital', 'display_name' => 'Admin Hospital', 'description' => 'Admin Hospital can see all the records'],
        	['name' => 'Normal Hospital', 'display_name' => 'Normal Hospital', 'description' => 'Normal Hospital can see their own records'],
        ];

        foreach($roles as $key => $role)
            Role::create($role);
    }
}
