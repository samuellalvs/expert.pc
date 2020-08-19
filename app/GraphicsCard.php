<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraphicsCard extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'graphicscards';
    protected $fillable = [
        'id',
        'name',
        'score'
    ];
}
