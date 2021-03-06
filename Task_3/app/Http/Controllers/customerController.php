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
            // session_start();
            // $_SESSION['customerName'] = $request->customerName;
            //$_SESSION['customerPhone'] = $request->customerPhone;
            session()->put('customerName',$request->customerName);
            session()->put('customerPhone',$request->customerPhone);
            return redirect()->route('list');
        }
        else{
            return "not ok";
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        session()->flush();

        return redirect()->route('customer.login');

    }

    public function cart(){
        session_start();
        if(session()->get('cart')!= null)
            $_SESSION['cart'] = json_encode(json_decode(session('cart')));
        return view('customer.addtocart');
    }

    public function addCart(Request $request){
        session_start();
        if(session()->get('customerName') != null){
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
            
            if(isset($_SESSION['list'])!=null){
                $productsArr = json_decode($_SESSION['list']);
                $products = $productsArr;
                array_push($products,$var);
                
            }
            else{
                array_push($products,$var);
            }

            //$_SESSION['cart'] = json_encode($products);
            session()->put('cart',json_encode($products));
            

            //return view('customer.addtocart');
            return redirect()->route('cart');

            //return $products;
        }
        else{
            return redirect()->route('customer.login'); 
        }

        
    }
}
