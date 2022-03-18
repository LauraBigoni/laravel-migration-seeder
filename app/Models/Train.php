<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'company_name',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'code_number',
        'carriages',
        'in_time',
        'canceled'
    ];
}
