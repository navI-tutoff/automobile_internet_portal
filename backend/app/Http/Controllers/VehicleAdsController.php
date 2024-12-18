<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class VehicleAdsController extends Controller {
    public function index() {
        return Vehicle::query()
                ->join('users', 'vehicles.owner_id', '=', 'users.id')
                ->select('vehicles.*', 'users.nick AS seller_nick')
                // ->orderBy('created_at', 'DESC')
                ->limit(5)
                ->get();
    }
 
    public function info($id) {
        return Vehicle::query()
                ->join('users', 'vehicles.owner_id', '=', 'users.id')
                ->select('vehicles.*', 'users.nick AS seller_nick', 'users.phone_number as seller_phone')
                ->where('vehicles.id', '=', $id) 
                ->first();
    }
}