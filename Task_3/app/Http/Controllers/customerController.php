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
            session_start();
            $_SESSION['customerName'] = $request->customerName;
            $_SESSION['customerPhone'] = $request->customerPhone;
            return redirect()->route('list');
        }
        else{
            return "not ok";
        }
    }


    public function logout(){
        session_start();
        session_destroy();

        return redirect()->route('customer.login');

    }

    public function addCart(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->first();
        // $var = array(
        //     'id'=> $product->id,
        //     'productId' => $product->productId,
        //     'productName' => $product->productName,
        //     'price' => $product->price,
        //     'quantity' => $product->quantity,
        //     'description' => $product->description
        // );
        $var = new Product();
        $var->id= $product->id;
        $var->productId = $product->productId;
        $var->productName = $product->productName;
        $var->price = $product->price;
        $var->quantity = $product->quantity;
        $var->description = $product->description;

        $products = [];

        session_start();
        
        $products[] = $var;




        $_SESSION['cart'] = json_encode($products);
        

        return view('customer.addtocart');

        //return $products;
    }
}
