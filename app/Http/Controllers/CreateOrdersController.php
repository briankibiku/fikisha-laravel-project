<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Order;

class CreateOrdersController extends Controller
{
    public function index()
    {
        return view('orders.create');
    }
    
    protected function validator(Request $request)
        {
            return Validator::make($request, [
                'customer_name' => ['required', 'string', 'max:255'],
                'load_capacity' => ['required', 'string',   'max:255' ],
                'destination' => ['required', 'string',   'max:255' ],
                'priority' => ['required', 'string',   'max:255' ],
                'customer_phone' => ['required', 'string',   'max:255' ],
                'description' => ['required', 'string',   'max:255' ],
                'status' => ['required', 'string',   'max:255' ],
                'due_date' => ['string',   'max:255' ],
            ]);
        }
    
        protected function create(Request $request)
        {
            // dd($request->due_date);
            Order::create([
                'customer_name' => $request->customer_name,
                'load_capacity' => $request->load_capacity,
                'destination' => $request->destination,
                'priority' => $request->priority,
                'customer_phone' => $request->customer_phone,
                'description' => $request->description,
                'status' => "Pending",
                'due_date' => $request->due_date,
            ]);
            return redirect('/home');
        } 

        public function allocate_order($id)
        {            
            $order =  Order::find($id);
            $vehicles = DB::select('select * from vehicles where status="Available"');
            // dd($vehicles);
            return view('orders.allocate', ['order' => $order, 'vehicles' => $vehicles] );
        }

        public function update(Request $request){
            // dd($request->vehicle_vin);
            $order =  Order::find($request->id);   
            $order->customer_name=$request->customer_name;
            $order->customer_phone=$request->customer_phone;
            $order->load_capacity=$request->load_capacity;
            $order->destination=$request->destination;
            $order->priority=$request->priority;
            $order->description=$request->description;
            $order->due_date=$request->due_date;
            $order->status=$request->status;
            $order->vehicle_vin=$request->vehicle_vin;
            $order->save();
            DB::update("update vehicles set status='Loading' where vehicle_vin='$request->vehicle_vin'");
            return redirect('/orders');        
        }
}
