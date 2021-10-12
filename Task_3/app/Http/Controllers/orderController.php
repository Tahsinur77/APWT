<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Http\Controllers\customerController;
use App\Models\orderDetails;

class orderController extends Controller
{
    //
    public function order(REQUEST $req){
        $customerPhone = session()->get('customerPhone');
        if(session()->get('cart')!= null){
            $orderLists = json_decode(session('cart'));
            
            $var = new order();
            $var->orderNo = 'order_1';
            $var->customerPhone = $customerPhone;
            $var->Status = 'sucess';
            $var->save();

            foreach($orderLists as $orderList){
                $orderDetails = new orderDetails();
                $orderDetails->orderNo = 'order_1';
                $orderDetails->productId = $orderList->productId;
                $orderDetails->quantity = $orderList->quantity;
                $orderDetails->totalPrice = $orderList->price*$orderList->quantity; 
                $orderDetails->save();
            }

        }

        
        
        return "order Complete";
    }
}
