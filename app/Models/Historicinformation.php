<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historicinformation extends Model
{
    use HasFactory;



    protected $appends = ['january' , 
    'february',
    'march',
    'april',
    'may',
    'june',
    'july',
    'august',
    'september',
    'octobar',
    'november',
    'december',
    'yearly_consumption',
    'yearly_production',
    'offset'
];



protected $fillable = ['january' , 
'february',
    'march',
    'april',
    'may',
    'june',
    'july',
    'august',
    'september',
    'octobar',
    'november',
    'december',
    'yearly_consumption',
    'yearly_production',
    'offset'
];

}
