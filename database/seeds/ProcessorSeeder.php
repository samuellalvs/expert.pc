<?php

use Illuminate\Database\Seeder;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processors')->insert([
            'name' => 'AMD Athlon 200GE',
            'core' => '2',
            'thread' => '4',
            'socket' => 'AM4',
            'clock' => '3.2 GHz',
            'tdp' => '35',
            'released' => 'Apr 24th, 2020',
            'video' => 'Radeon Vega 3',
            'score' => '13',
            'price' => 69,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('processors')->insert([
            'name' => 'Ryzen 3 3200G',
            'core' => '4',
            'thread' => '4',
            'socket' => 'AM4',
            'clock' => '3.6 to 4 GHz',
            'tdp' => '65',
            'released' => 'Apr 24th, 2020',
            'video' => 'Radeon Vega 8',
            'score' => '24',
            'price' => 100,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('processors')->insert([
            'name' => 'Ryzen 3 3100',
            'core' => '4',
            'thread' => '8',
            'socket' => 'AM4',
            'clock' => '3.6 to 3.9 GHz',
            'tdp' => '65',
            'released' => 'Apr 24th, 2020',
            'video' => 'no',
            'score' => '36',
            'price' => 110,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('processors')->insert([
            'name' => 'Ryzen 5 3600',
            'core' => '6',
            'thread' => '12',
            'socket' => 'AM4',
            'clock' => '3.6 to 4.2 GHz',
            'tdp' => '65',
            'released' => 'Jul 7th, 2019',
            'video' => 'no',
            'score' => '51',
            'price' => 160,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('processors')->insert([
            'name' => 'Ryzen 7 3700X',
            'core' => '8',
            'thread' => '16',
            'socket' => 'AM4',
            'clock' => '3.6 to 4.4 GHz',
            'tdp' => '65',
            'released' => 'Jul 7th, 2019',
            'video' => 'no',
            'score' => '71',
            'price' => 280,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('processors')->insert([
            'name' => 'Core i3-9100F',
            'core' => '4',
            'thread' => '4',
            'socket' => '1151',
            'clock' => '3.6 to 4.2 GHz',
            'tdp' => '65',
            'released' => 'Apr 23rd, 2019',
            'video' => 'no',
            'score' => '27',
            'price' => 75,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('processors')->insert([
            'name' => 'Core i5-9400F',
            'core' => '6',
            'thread' => '6',
            'socket' => '1151',
            'clock' => '2.9 to 4.1 GHz',
            'tdp' => '65',
            'released' => 'Jan 8th, 2019',
            'video' => 'no',
            'score' => '38',
            'price' => 150,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


    }
}
