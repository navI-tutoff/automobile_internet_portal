<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {
    protected $table = 'vehicles';

    protected $fillable = [
        'name',
        'photo',
        'equipment',
        'characteristics',
        'price',
        'pre_rating',
        'seller_nick',
        'seller_city',
        'sell_date',
    ];
}