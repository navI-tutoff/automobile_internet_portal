<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {
    public function run() {
        for ($i = 0; $i < 7; $i++) {
            User::create([
                'nick' => 'User #' . $i + 1,
                'password' => 'pswd' . $i + 1,
                'email' => 'test' . $i + 1 . '@mail.ru',
                'phone_number' => '8904424542' . $i + 1
            ]);
        }
    }
}