<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    protected $table = 'processors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'core',
        'thread',
        'socket',
        'clock',
        'tdp',
        'released'
    ];

}
