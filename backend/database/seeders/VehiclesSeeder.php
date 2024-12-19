<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder {
    public function run() {
        for ($i = 0; $i < 7; $i++) {
            Vehicle::create([
                'owner_id' => $i + 1,
                'name' => 'Tesla Model ' . $i + 1,
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/2021_Tesla_Model_S_P2_Long_Range_front_right_view.jpg/800px-2021_Tesla_Model_S_P2_Long_Range_front_right_view.jpg',
                'equipment' => 'P10' . $i + 1 . 'D kWh Performance',
                'price' => ($i + 1) * 1000000,
                'mileage' => ($i + 25) * 10000,
                'pre_rating' => 'Нормальная цена',
                'engine' => 'электро',
                'power' => '625 л.с.',
                'gearbox' => 'АКПП',
                'drive' => 'полный',
                'color' => 'белый',
                'wheel' => 'левый',
                'selling_city' => 'Строитель',
                'selling_date' => '2024-12-16 11:30:25'
            ]);
        }
    }
}