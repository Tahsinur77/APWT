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

    public function cart(){
        session_start();
        if(isset($_SESSION['list'])!= null)
            $_SESSION['cart'] = json_encode(json_decode($_SESSION['list']));
        return view('customer.addtocart');
    }

    public function addCart(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->first();
        $var = new Product();
        $var->id= $product->id;
        $var->productId = $product->productId;
        $var->productName = $product->productName;
        $var->price = $product->price;
        $var->quantity = $product->quantity;
        $var->description = $product->description;

        $products = array();

        session_start();
        
        

        if(isset($_SESSION['list'])!=null){
            $productsArr = json_decode($_SESSION['list']);
            $products = $productsArr;
            array_push($products,$var);
            
        }
        else{
            array_push($products,$var);
        }

        $_SESSION['cart'] = json_encode($products);
        

        return view('customer.addtocart');

        //return $products;
    }
}
