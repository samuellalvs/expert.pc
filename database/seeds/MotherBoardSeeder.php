<?php

use Illuminate\Database\Seeder;

class MotherBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motherboards')->insert([
            'name' => 'Asus PRIME A320M-K',
            'socket' => 'AM4',
            'form_factor' => 'Micro ATX',
            'memory_max' => '32',
            'memory_slots' => '2',
            'score' => '14',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('motherboards')->insert([
            'name' => 'Gigabyte GA-AB350M-DS3H',
            'socket' => 'AM4',
            'form_factor' => 'Micro ATX',
            'memory_max' => '64',
            'memory_slots' => '4',
            'score' => '16',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('motherboards')->insert([
            'name' => 'Asus PRIME H310M-E R2.0',
            'socket' => '1151',
            'form_factor' => 'Micro ATX',
            'memory_max' => '32',
            'memory_slots' => '2',
            'score' => '14',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('motherboards')->insert([
            'name' => 'Asus TUF GAMING X570-PLUS',
            'socket' => 'AM4',
            'form_factor' => 'ATX',
            'memory_max' => '128',
            'memory_slots' => '4',
            'score' => '33',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
