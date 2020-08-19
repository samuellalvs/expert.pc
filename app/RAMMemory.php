<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RAMMemory extends Model
{
    protected $table = 'rammemory';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'capacity',
        'velocity',
        'standard'
    ];

    public function min_ram(){
        $min = false;

        if($this->capacity >= 8){
            $min = true;
        }

        return $min;
    }

}
