<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraphicsCard;
use App\PowerSupply;
use App\RAMMemory;
use App\Processor;
use App\MotherBoard;

class ExpertPCController extends Controller
{
    public function upgrade(Request $request){
        $psu = PowerSupply::find($request->input('power_supply'));
        $graphics_card = GraphicsCard::find($request->input('graphics_card'));
        $ram_memory = RAMMemory::find($request->input('ram_memory'));
        $motherboard = MotherBoard::find($request->input('motherboard'));
        $processor = Processor::find($request->input('processor'));
        $points = $request->input('budget');

        $pc = [
            'processor' => $processor,
            'motherboard' => $motherboard,
            'ram_memory' => $ram_memory,  
            'graphics_card' => $graphics_card,
            'psu' => $psu
        ];

        $upgrade = $this->pc_upgrade($pc, $points);



        return response()->json($upgrade);
    }


    public function pc_upgrade($pc, $points){
        
        //ordernar array por prioridade de upgrade
        uasort($pc, function($a, $b)
        {
            return $a->score > $b->score;
        });

        foreach ($pc as $type => $component) {
            if($type == 'processor'){
                $new_processor = Processor::where([['score', '>', $component->score], ['socket', $pc['motherboard']->socket]])->orderBy('score', 'asc')->first();
                //placa mae aguenta o upgrade do processador?
                $supported = $pc['motherboard']->supported_processor($component, $pc['motherboard']->processors);
                if($supported){
                    //possui o minimo de RAM?
                    $min_ram = $pc['ram_memory']->min_ram();
                    if($min_ram){
                        $pc['processor'] = $new_processor;
                        $points = $points - $new_processor->price;
                    }
                }
            }

            if($type == 'graphics_card'){
                $new_graphics_card = GraphicsCard::where([['score', '>', $component->score]])->orderBy('score', 'asc')->first();

                //fonte suporta?
                if($pc['psu']->watts >= $pc['graphics_card']->psu ){
                    $pc['graphics_card'] = $new_graphics_card;
                    $points = $points - $new_graphics_card->price;
                }else{
                    
                }
            }
        }
        
        return response()->json([
            'pc' => $pc
        ]);
    }

    public function hardware_items(){
        $graphics_cards = GraphicsCard::orderBy('score')->get();
        $power_supplys = PowerSupply::orderBy('name')->get();
        $ram_memory = RAMMemory::all();
        $processors = Processor::all();
        $motherboards = MotherBoard::all();

        return response()->json([
            'graphics_cards' => $graphics_cards,
            'power_supplys' => $power_supplys,
            'ram_memory' => $ram_memory,
            'processors' => $processors,
            'motherboards' => $motherboards
        ]);
    }

    function get_next($array, $key) {
        return current(array_slice($array, array_search($key, array_keys($array)) + 1, 1));
     }
}
