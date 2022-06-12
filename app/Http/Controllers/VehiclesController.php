<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiclesController extends Controller
{
    public function index()
    {

        $vehicles = DB::select('select * from vehicles');
        // dd($vehicles);
 
        return view('vehicles.index', ['vehicles' => $vehicles]);
    }

    public function loading()
    {
        $loading_vehicles = DB::select('select * from vehicles where status="Loading"'); 
        return view('vehicles.loading', ['loading_vehicles' => $loading_vehicles]);
    }

    public function on_transit()
    {
        $on_transit_vehicles = DB::select('select * from vehicles where status="On transit"'); 
        return view('vehicles.on_transit', ['on_transit_vehicles' => $on_transit_vehicles]);
    }

    public function available()
    {
        $available_vehicles = DB::select('select * from vehicles where status="Available"'); 
        return view('vehicles.available', ['available_vehicles' => $available_vehicles]);
    }

    
}
