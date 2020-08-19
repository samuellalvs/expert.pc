<?php

use Illuminate\Database\Seeder;

class RecommendedProcessor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recommendedprocessors')->insert([
            'processor_id' => 1,
            'motherboard_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 2,
            'motherboard_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 3,
            'motherboard_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 4,
            'motherboard_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 6,
            'motherboard_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 7,
            'motherboard_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 1,
            'motherboard_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 2,
            'motherboard_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 3,
            'motherboard_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 4,
            'motherboard_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 5,
            'motherboard_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 4,
            'motherboard_id' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('recommendedprocessors')->insert([
            'processor_id' => 5,
            'motherboard_id' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
