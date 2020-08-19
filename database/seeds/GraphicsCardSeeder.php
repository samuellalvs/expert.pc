<?php

use Illuminate\Database\Seeder;

class GraphicsCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('graphicscards')->insert([
            'name' => 'RX 550',
            'psu' => '350',
            'score' => 13,
            'price' => 600,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'GTX 1050 Ti',
            'score' => 25,
            'psu' => '350',
            'price' => 99999,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RX 570',
            'score' => 35,
            'psu' => '350',
            'price' => 1050,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RX 580',
            'score' => 40,
            'psu' => '450',
            'price' => 1500,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RX 5500 XT',
            'score' => 41,
            'psu' => '450',
            'price' => 1600,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RX 590',
            'score' => 44,
            'psu' => '450',
            'price' => 99999,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'GTX 1660',
            'score' => 46,
            'psu' => '350',
            'price' => 1800,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'GTX 1660 SUPER',
            'score' => 52,
            'psu' => '350',
            'price' => 2000,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'GTX 1660 Ti',
            'score' => 53,
            'psu' => '350',
            'price' => 2200,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RTX 2060',
            'score' => 62,
            'psu' => '450',
            'price' => 2300,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RTX 2060 SUPER',
            'score' => 70,
            'psu' => '450',
            'price' => 2600,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RX 5700 XT',
            'score' => 74,
            'psu' => '600',
            'price' => 2600,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'GTX 1070',
            'score' => 53,
            'psu' => '350',
            'price' => 99999,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'GTX 1080 Ti',
            'score' => 79,
            'psu' => '600',
            'price' => 99999,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RTX 2070 SUPER',
            'score' => 80,
            'psu' => '550',
            'price' => 3600,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RTX 2080',
            'score' => 85,
            'psu' => '550',
            'price' => 4000,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RTX 2080 SUPER',
            'score' => 91,
            'psu' => '600',
            'price' => 4950,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'RTX 2080 Ti',
            'score' => 100,
            'psu' => '600',
            'price' => 8000,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('graphicscards')->insert([
            'name' => 'Nenhuma',
            'score' => 0,
            'psu' => '0',
            'price' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
