<?php

use Illuminate\Database\Seeder;
use App\Hospital;

class HospitalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->truncate();
        $this->command->info("\nRebuild hospitals table");

        $hospitals = [
            ['name' => 'HOSPITAL QUEEN ELIZABETH',			'short_name' => 'HQE'],
            ['name' => 'HOSPITAL QUEEN ELIZABETH II',		'short_name' => 'HQEII'],
            ['name' => 'HOSPITAL DUTCHES OF KENT SANDAKAN',	'short_name' => 'HDOK'],
            ['name' => 'HOSPITAL TAWAU',					'short_name' => 'HTWU'],
            ['name' => 'HOSPITAL KENINGAU',              	'short_name' => 'HKGU'],
            ['name' => 'HOSPITAL LAHAD DATU',            	'short_name' => 'HLDT'],
            ['name' => 'HOSPITAL KOTA MARUDU',           	'short_name' => 'HMRU'],
            ['name' => 'HOSPITAL BEAUFORT',              	'short_name' => 'HBFT'],
            ['name' => 'HOSPITAL SIPITANG',              	'short_name' => 'HSPT'],
            ['name' => 'HOSPITAL PAPAR',                 	'short_name' => 'HPPR'],
            ['name' => 'HOSPITAL KOTA BELUD',            	'short_name' => 'HKOB'],
            ['name' => 'HOSPITAL SEMPORNA',              	'short_name' => 'HSEM'],
            ['name' => 'HOSPITAL TAMBUNAN',              	'short_name' => 'HTBN'],
            ['name' => 'HOSPITAL KINABATANGAN',          	'short_name' => 'HKBT'],
            ['name' => 'HOSPITAL KUALA PENYU',           	'short_name' => 'HKUP'],
            ['name' => 'HOSPITAL KUDAT',                	'short_name' => 'HKDT'],
            ['name' => 'HOSPITAL TENOM',                 	'short_name' => 'HTNM'],
            ['name' => 'HOSPITAL KUNAK',                 	'short_name' => 'HKNK'],
            ['name' => 'HOSPITAL PITAS',                 	'short_name' => 'HPTS'],
            ['name' => 'HOSPITAL BELURAN',               	'short_name' => 'HBRN'],
            ['name' => 'HOSPITAL RANAU',                 	'short_name' => 'HRNU'],
            ['name' => 'HOSPITAL LIKAS',                    'short_name' => 'HWKKS'],
            ['name' => 'HOSPITAL TUARAN',					'short_name' => 'HTRN']
        ];

        foreach($hospitals as $key => $hospital)
            Hospital::create($hospital);
    }
}
