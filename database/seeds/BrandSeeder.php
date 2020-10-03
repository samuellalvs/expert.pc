<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Afox',
            'type' => 'graphics_card',
            'image' => 'afox.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'AMD',
            'type' => 'graphics_card',
            'image' => 'amd.png',
        ]);
        
        DB::table('brands')->insert([
            'name' => 'Aorus',
            'type' => 'graphics_card',
            'image' => 'aorus.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'ASRock',
            'type' => 'graphics_card',
            'image' => 'asrock.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Asus',
            'type' => 'graphics_card',
            'image' => 'asus.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Colorful',
            'type' => 'graphics_card',
            'image' => 'colorful.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Deepcool',
            'type' => 'graphics_card',
            'image' => 'deepcool.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Evga',
            'type' => 'graphics_card',
            'image' => 'evga.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Gainward',
            'type' => 'graphics_card',
            'image' => 'gainward.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Galax',
            'type' => 'graphics_card',
            'image' => 'galax.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Gigabyte',
            'type' => 'graphics_card',
            'image' => 'gigabyte.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Husky',
            'type' => 'graphics_card',
            'image' => 'husky.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'MSI',
            'type' => 'graphics_card',
            'image' => 'msi.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'PCYes',
            'type' => 'graphics_card',
            'image' => 'pcyes.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Pny',
            'type' => 'graphics_card',
            'image' => 'pny.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Powercolor',
            'type' => 'graphics_card',
            'image' => 'powercolor.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Rise Mode',
            'type' => 'graphics_card',
            'image' => 'rise_mode.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Sapphire',
            'type' => 'graphics_card',
            'image' => 'sapphire.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'XFX',
            'type' => 'graphics_card',
            'image' => 'xfx.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Zotac',
            'type' => 'graphics_card',
            'image' => 'zotac.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'AMD',
            'type' => 'processor',
            'image' => 'amd.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Intel',
            'type' => 'processor',
            'image' => 'intel.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Aorus',
            'type' => 'motherboard',
            'image' => 'aorus.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'ASRock',
            'type' => 'motherboard',
            'image' => 'asrock.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Asus',
            'type' => 'motherboard',
            'image' => 'asus.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Galax',
            'type' => 'motherboard',
            'image' => 'galax.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Gigabyte',
            'type' => 'motherboard',
            'image' => 'gigabyte.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'MSI',
            'type' => 'motherboard',
            'image' => 'msi.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Aerocool',
            'type' => 'power_supply',
            'image' => 'aerocool.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Bluecase',
            'type' => 'power_supply',
            'image' => 'bluecase.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'BR One',
            'type' => 'power_supply',
            'image' => 'br_one.png',
        ]);
        
        DB::table('brands')->insert([
            'name' => 'Brazil PC',
            'type' => 'power_supply',
            'image' => 'brazil_pc.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'C3 Plus',
            'type' => 'power_supply',
            'image' => 'cr_plus.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'C3 tech',
            'type' => 'power_supply',
            'image' => 'c3_tech.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Casemall',
            'type' => 'power_supply',
            'image' => 'casemall.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Cooler Master',
            'type' => 'power_supply',
            'image' => 'cooler_master.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Corsair',
            'type' => 'power_supply',
            'image' => 'corsair.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Deepcool',
            'type' => 'power_supply',
            'image' => 'deepcool.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Epic Power',
            'type' => 'power_supply',
            'image' => 'epic_power.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Evga',
            'type' => 'power_supply',
            'image' => 'evga.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Fortrek',
            'type' => 'power_supply',
            'image' => 'fortrek.png',
        ]);
        
        DB::table('brands')->insert([
            'name' => 'Gamemax',
            'type' => 'power_supply',
            'image' => 'gamemax.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Gigabyte',
            'type' => 'power_supply',
            'image' => 'gigabyte.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Hoopson',
            'type' => 'power_supply',
            'image' => 'hoopson.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'K-mex',
            'type' => 'power_supply',
            'image' => 'k_mex.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Multilaser',
            'type' => 'power_supply',
            'image' => 'multilaser.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'NOX',
            'type' => 'power_supply',
            'image' => 'nox.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'NZXT',
            'type' => 'power_supply',
            'image' => 'nzxt.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Onepower',
            'type' => 'power_supply',
            'image' => 'onepower.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'PCYes',
            'type' => 'power_supply',
            'image' => 'pcyes.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Pixxo',
            'type' => 'power_supply',
            'image' => 'pixxo.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'PowerX',
            'type' => 'power_supply',
            'image' => 'powerx.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Raptor',
            'type' => 'power_supply',
            'image' => 'raptor.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Rise Mode',
            'type' => 'power_supply',
            'image' => 'rise_mode.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Seasonic',
            'type' => 'power_supply',
            'image' => 'seasonic.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Sharkoon',
            'type' => 'power_supply',
            'image' => 'sharkoon.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'Thermaltake',
            'type' => 'power_supply',
            'image' => 'thermaltake.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Vinik',
            'type' => 'power_supply',
            'image' => 'vinik.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'Wisecase',
            'type' => 'power_supply',
            'image' => 'wisecase.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'XFX',
            'type' => 'power_supply',
            'image' => 'xfx.png',
        ]);

        DB::table('brands')->insert([
            'name' => 'XPG',
            'type' => 'power_supply',
            'image' => 'xpg.png',
        ]);


        DB::table('brands')->insert([
            'name' =>'Adata',
            'type' => 'ram_memory',
            'image' => 'adata.png',
        ]);

        DB::table('brands')->insert([
            'name' =>'Aorus',
            'type' => 'ram_memory',
            'image' => 'aorus.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Bluecase',
            'type' => 'ram_memory',
            'image' => 'bluecase.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Corsair',
            'type' => 'ram_memory',
            'image' => 'corsair.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Crucial',
            'type' => 'ram_memory',
            'image' => 'crucial.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'G.skill',
            'type' => 'ram_memory',
            'image' => 'g_skill.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Geil',
            'type' => 'ram_memory',
            'image' => 'geil.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Gigabyte',
            'type' => 'ram_memory',
            'image' => 'gigabyte.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Hp',
            'type' => 'ram_memory',
            'image' => 'hp.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Husky',
            'type' => 'ram_memory',
            'image' => 'husky.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Hyperx',
            'type' => 'ram_memory',
            'image' => 'hyperx.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Intel',
            'type' => 'ram_memory',
            'image' => 'intel.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Kingston',
            'type' => 'ram_memory',
            'image' => 'kingston.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Lexar',
            'type' => 'ram_memory',
            'image' => 'lexar.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Patriot',
            'type' => 'ram_memory',
            'image' => 'patriot.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'Rise Mode',
            'type' => 'ram_memory',
            'image' => 'rise_mode.png',
        ]);
        DB::table('brands')->insert([
            'name' =>'XPG',
            'type' => 'ram_memory',
            'image' => 'xpg.png',
        ]);

    }
}
