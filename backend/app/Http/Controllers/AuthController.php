<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function login(Request $request) {
        $fields = $request->validate([
            'login' => 'required|string|min:3',
            'password' => 'required|string'
        ]);

        $login = $fields['login'];
        $password = $fields['password'];

        $user_info = User::query()
                        // ->select('login', 'password')
                        ->where('nick', '=', $login)
                        ->first();

        if ($user_info != null && Hash::check($password, $user_info->password)) {
            return [
                'status' => 'success',
                'message' => 'Авторизация успешна'
            ];
        } else {
            return [
                'status' => 'failed',
                'message' => 'Неверный логин или пароль'
            ];
        }
    }

    public function reg(Request $request) {
        $fields = $request->validate([
            'login' => 'required|string|min:3',
            'password' => 'required|string'
        ]);

        $login = $fields['login'];
        $password = $fields['password'];

        $user_info = User::query()
                        // ->select('login', 'password')
                        ->where('nick', '=', $login)
                        ->first();

        if ($user_info === null) {
            User::create([
                'nick' => $login,
                'password' => Hash::make($password),
                'email' => 'mail@mail.ru',
                'phone_number' => '1'
            ]);
        }

        return [
            'status' => 'success',
            'message' => 'Регистрация успешна'
        ];
    }
}