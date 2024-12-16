<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder {
    public function run() {
        for ($i = 0; $i < 7; $i++) {
            Vehicle::create([
                'name' => 'Tesla Model ' . $i + 1,
                'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAVwklhrhjLGI7vfdvEhGoCCzIJv4ofT9KTw&s',
                'equipment' => 'P10' . $i + 1 . 'D kWh Performance',
                'characteristics' => '765 л.с., электро, АКПП, 4WD, 24 000 км',
                'price' => ($i + 1) * 100000,
                'pre_rating' => 'Нормальная цена',
                'seller_nick' => 'Danil Rake',
                'seller_city' => 'Строитель',
                'sell_date' => '2024-12-16 11:30:25',
            ]);
        }
    }
}