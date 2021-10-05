<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class pagesController extends Controller
{
    //
    public function product(){
        return view('pages/Product');
    }

    public function check(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|regex:/^[A-Za-z]+$/',
                'id'=>'required',
                'price'=>'required|regex:/^[0-9]+$/',
                'quantity'=>'required|regex:/^[0-9]+$/',
                'description'=>'required'
            ]
        );

        $var = new Product();
        $var->productId = $request->id;
        $var->productName = $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description = $request->description;
        $var->save();

        return "added";
    }
}
