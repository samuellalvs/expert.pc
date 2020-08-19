<?php

use Illuminate\Database\Seeder;

class RAMMemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rammemory')->insert([
            'capacity' => '4',
            'velocity' => '2666MHz',
            'standard' => 'DDR4',
            'score' => 150,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('rammemory')->insert([
            'capacity' => '4',
            'velocity' => '3000MHz',
            'standard' => 'DDR4',
            'score' => 160,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('rammemory')->insert([
            'capacity' => '8',
            'velocity' => '2666MHz',
            'standard' => 'DDR4',
            'score' => 250,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('rammemory')->insert([
            'capacity' => '8',
            'velocity' => '3000MHz',
            'standard' => 'DDR4',
            'score' => 280,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('rammemory')->insert([
            'capacity' => '16',
            'velocity' => '2666MHz',
            'standard' => 'DDR4',
            'score' => 400,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('rammemory')->insert([
            'capacity' => '16',
            'velocity' => '3000MHz',
            'standard' => 'DDR4',
            'score' => 420,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
