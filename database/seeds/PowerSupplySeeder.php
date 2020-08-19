<?php

use Illuminate\Database\Seeder;

class PowerSupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('powersupply')->insert([
            'name' => 'Cooler Master 300W Elite V3',
            'watts' => '300',
            'brand' => 'Cooler Master',
            'score' => '20',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('powersupply')->insert([
            'name' => 'VS450',
            'watts' => '450',
            'brand' => 'Corsair',
            'score' => '30',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('powersupply')->insert([
            'name' => 'VS550',
            'watts' => '550',
            'brand' => 'Corsair',
            'score' => '40',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('powersupply')->insert([
            'name' => 'VS650',
            'watts' => '650',
            'brand' => 'Corsair',
            'score' => '45',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('powersupply')->insert([
            'name' => 'CX750',
            'watts' => '750',
            'brand' => 'Corsair',
            'score' => '50',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
