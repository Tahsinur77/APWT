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
                'productName'=>'required|regex:/^[A-Za-z]+$/',
                'productId'=>'required',
                'price'=>'required|regex:/^[0-9]+$/',
                'quantity'=>'required|regex:/^[0-9]+$/',
                'description'=>'required'
            ]
        );

        $var = new Product();
        $var->productId = $request->productId;
        $var->productName = $request->productName;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description = $request->description;
        $var->save();

        return redirect()->route('list');;
    }

    public function list(){
        $products = Product::all();
        return view('pages.list')->with('products',$products);
    }

    public function edit(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->first();
        return view('pages.edit')->with('product',$product);
    }

    public function editSubmit(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->productId = $request->productId;
        $var->productName = $request->productName;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description = $request->description;
        $var->save();
        return redirect()->route('list');

    }

    public function delete(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->delete();
        return redirect()->route('list');
    }
}
