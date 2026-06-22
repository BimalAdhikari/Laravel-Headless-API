<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etappe extends Model
{
    protected $fillable = [
        'stage_number',
        'stage_date',
        'stage_type',
        'start_city',
        'finish_city',
        'distance_km',
        'elevation_d_plus',
        'description',
        'created_at',
        'updated_at',
    
    ];
    

    protected $casts = [
        'stage_date' => 'date',
        'distance_km' => 'decimal:2',
        'elevation_d_plus' => 'integer',
    ];
}
