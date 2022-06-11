<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    
    public function index()
    {
        $orders = DB::select('select * from orders');
        // dd($orders);
 
        return view('orders.index', ['orders' => $orders]);

        // DB::select('select * from users where active = ?', [1])
        // return view('customers.index');
    }

    public function pending()
    {
        $pending_orders = DB::select('select * from orders where status="Pending"');
        // dd($orders);
 
        return view('orders.pending', ['pending_orders' => $pending_orders]); 
    }

    public function loading()
    {
        $loading_orders = DB::select('select * from orders where status="Loading"');
        // dd($orders);
 
        return view('orders.loading', ['loading_orders' => $loading_orders]); 
    }

    public function dispatched()
    {
        $dispatched_orders = DB::select('select * from orders where status="Dispatched"');
        // dd($orders);
 
        return view('orders.dispatched', ['dispatched_orders' => $dispatched_orders]); 
    }

    public function delivered()
    {
        $delivered_orders = DB::select('select * from orders where status="Delivered"');
        // dd($orders);
 
        return view('orders.delivered', ['delivered_orders' => $delivered_orders]); 
    }
}
