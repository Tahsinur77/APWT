<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return "added";
    }
}
