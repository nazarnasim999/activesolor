<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthlypayment extends Model
{
    use HasFactory;


    protected $appends = ['Reamorization' , 
    'basic_service_charge',
    'keep_tax_credit',
    'allocate_tax_credit',
    'total_cost_util',
    'switching_solar',
    'year_saving'
    
];



protected $fillable = ['Reamorization' , 
'basic_service_charge',
'keep_tax_credit',
'allocate_tax_credit',
'total_cost_util',
'switching_solar',
'year_saving'
];
}
