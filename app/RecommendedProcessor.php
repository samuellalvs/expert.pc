<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecommendedProcessor extends Model
{
    protected $table = 'recommendedprocessors';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'processor_id',
        'motherboard_id'
    ];

}
