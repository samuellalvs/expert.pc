<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotherBoard extends Model
{
    protected $table = 'motherboards';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'socket',
        'form_factor',
        'memory_max',
        'memory_slots',
        'score'	
    ];

    public function processors(){
        return $this->hasMany('App\RecommendedProcessor', 'processor_id', 'id');
    }

    public function supported_processor($processor, $motherboard_processors){
        $supported = false;

        foreach ($motherboard_processors as $sp_key => $sup_processor) {
            if($sup_processor->processor_id == $processor->id){
                $supported = true;
            }
        }

        return $supported;
    }
}
