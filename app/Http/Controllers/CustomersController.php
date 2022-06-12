<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = DB::select('select * from customers');
        // dd($users);
 
        return view('customers.index', ['customers' => $customers]);

        // DB::select('select * from users where active = ?', [1])
        // return view('customers.index');
    }
}
