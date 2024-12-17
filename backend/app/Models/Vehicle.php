<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {
    protected $table = 'vehicles';

    protected $fillable = [
        'owner_id',
        'name',
        'photo',
        'equipment',
        'price',
        'mileage',
        'pre_rating',
        'engine',
        'power',
        'gearbox',
        'drive',
        'color',
        'wheel',
        'selling_city',
        'selling_date'
    ];
}