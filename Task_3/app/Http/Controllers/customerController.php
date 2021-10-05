<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;

class customerController extends Controller
{
    //
    public function login(){
        return view('customer.login');
    }


    public function validation(Request $request){

        $customers = Customer::all();
        $check = false;
        foreach($customers as $customer){
            if($customer->customerName == $request->customerName && $customer->customerPhone == $request->customerPhone){
                $check = true;
                break;
            }
        }
        if($check == true){
            return redirect()->route('list');
        }
        else{
            return "not ok";
        }
    }
}
