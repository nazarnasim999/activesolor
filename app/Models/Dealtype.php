<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealtype extends Model
{
    use HasFactory;




    protected $appends = ['loan' , 
    'lender',
    'loan_term',
    'apr',
    'cash',
    'solar',
    'system_cost',
    'rebate',
    'state_rebate',
    'federal_tax',
    'state_tax',
    'total_tax',
    'total_finance',
    'net_cost'
];



protected $fillable = ['loan' , 
'lender',
'loan_term',
'apr',
'cash',
'solar',
'system_cost',
'rebate',
'state_rebate',
'federal_tax',
'state_tax',
'total_tax',
'total_finance',
'net_cost'
];



}
