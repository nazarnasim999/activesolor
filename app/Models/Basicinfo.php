<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basicinfo extends Model
{
    use HasFactory;


     protected $appends = ['installer' , 
            'state',
            'providers',
            'average',
            'packeage',
            'size',
            'panel',
            'production'
    ];



    protected $fillable = ['installer' , 
            'state',
            'providers',
            'average',
            'packeage',
            'size',
            'panel',
            'production'
    ];
}