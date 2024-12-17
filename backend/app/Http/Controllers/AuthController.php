<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller {
    // public function index() {
    //     return Vehicle::query()
    //             ->
    //             // ->orderBy('created_at', 'DESC')
    //             ->limit(5)
    //             ->get();
    // }
 
    // public function info($id) {
    //     return Vehicle::query()
    //             ->where('id', '=', $id) 
    //             ->first();
    // }

    public function login($login, $password) {
        return User::query()
                ->select('nick, password')
                ->where('nick', '=', $login)
                ->first();
    }
}