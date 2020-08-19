<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PowerSupply extends Model
{
    protected $table = 'powersupply';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'brand',
        'watts',
        'pfc',
        '80plus',
        'score'
    ];

    
}
