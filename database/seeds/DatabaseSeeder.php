<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	$this->call(HospitalsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LabelsTableSeeder::class);
        $this->call(RecordsSeeder::class);
        $this->call(RoleSeeder::class);
        

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 
    }
}
