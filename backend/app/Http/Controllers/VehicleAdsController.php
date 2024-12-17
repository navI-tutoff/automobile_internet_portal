<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class VehicleAdsController extends Controller {
    public function index() {
        return Vehicle::query()
                // ->orderBy('created_at', 'DESC')
                ->limit(5)
                ->get();
    }
 
    public function info($id) {
        return Vehicle::query()
                ->where('id', '=', $id) 
                ->first();
    }
}