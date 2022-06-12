<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Vehicle;


class CreateVehicleController extends Controller


{
    public function index()
    {
        return view('vehicles.create');
    }

    protected function validator(Request $request)
        {
            return Validator::make($request, [
                'vehicle_vin' => ['required', 'string', 'max:255'],
                'load_capacity' => ['required', 'string',   'max:255' ],
                'status' => ['required', 'string',   'max:255' ],
                'driver_phone' => ['required', 'string',   'max:255' ],

            ]);
        }
    
        protected function create(Request $request)
        {
            Vehicle::create([
                'vehicle_vin' => $request->vehicle_vin,
                'load_capacity' => $request->load_capacity,
                'driver_phone' => $request->driver_phone,
                'status' => "Available",
            ]);
             return redirect('/vehicles');
            
        } 
        public function delete($id)
        {
            DB::table('vehicles')->where('id', '=', $id)->delete();
            return redirect('/vehicles');
        }

        public function edit($id)
        {
            $vehicle =  Vehicle::find($id);
            return view('vehicles.edit', ['vehicle' => $vehicle] );
        }

        public function update(Request $request){
            $vehicle =  Vehicle::find($request->id);   
            $vehicle->vehicle_vin=$request->vehicle_vin;
            $vehicle->load_capacity=$request->load_capacity;
            $vehicle->driver_phone=$request->driver_phone;
            $vehicle->status=$request->status;
            $vehicle->save();
            return redirect('/vehicles');        
        }
}
