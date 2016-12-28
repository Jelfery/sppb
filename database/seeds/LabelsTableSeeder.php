<?php

use Illuminate\Database\Seeder;
use App\Label;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->truncate();
        $this->command->info("\nRebuild labels table");

        $labels = [
            ['name' => 'BEBANKERJA'],
            ['name' => 'BAJET_DUMMYVOT'],
            ['name' => 'BAJET_552M'],
            ['name' => 'BAJET_KEW13'],
            ['name' => 'BAJET_KEW9']       
        ];

        foreach($labels as $key => $label)
            Label::create($label);
    }
}
