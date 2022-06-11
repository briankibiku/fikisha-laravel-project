<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Customer;

class CreateCustomersController extends Controller
{
    public function index()
    {
        return view('customers.create');
    }

        protected function validator(Request $request)
        {
            return Validator::make($request, [
                'name' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string',   'max:255' ],
                'phone' => ['required', 'string',   'max:255' ],
                'email' => ['required', 'string',   'max:255' ],
            ]);
        }
    
        protected function create(Request $request)
        {
            Customer::create([
                'name' => $request->name,
                'location' => $request->location,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
            return redirect('/customers');
        } 


        public function delete($id)
        {
            DB::table('customers')->where('id', '=', $id)->delete();
            return redirect('/customers');
        }

        public function edit($id)
        {
            $customer =  Customer::find($id);
            return view('customers.edit', ['customer' => $customer] );
        }

        public function update(Request $request){
            $customer =  Customer::find($request->id);   
            $customer->location=$request->location;
            $customer->email=$request->email;
            $customer->phone=$request->phone;
            $customer->name=$request->name;
            $customer->save();
            return redirect('/customers');        
        }
}
