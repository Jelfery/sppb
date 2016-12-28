<?php

use Illuminate\Database\Seeder;
use App\Record;

class RecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->truncate();
        $this->command->info("\nRebuild records table");

        $records = [
        	['name' => 'file1', 'mime' => 'test', 'uploader' => 'name 1', 'user_id' => 1, 'label_id' => 1],
            ['name' => 'file2', 'mime' => 'test', 'uploader' => 'name 2', 'user_id' => 1, 'label_id' => 2],
            ['name' => 'file3', 'mime' => 'test', 'uploader' => 'name 3', 'user_id' => 1, 'label_id' => 3]
        ];

        foreach($records as $key => $record)
            Record::create($record);
        
    }
}
