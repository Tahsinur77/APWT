@extends('layouts.app')
@section('product')
    <table class="table table-borded"> 

    
        <tr>
            <th>Product Id</th>
            <th>Name</th>
            <th>price</th>
            <th>quantity</th>
            <th>description</th>
            <th>Add Card</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->productId}}</td>
                <td>{{$product->productName}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td> 
                    <a href="/addtocart/{{$product->id}}">
                        <img src="https://img.icons8.com/material-outlined/24/000000/add-shopping-cart.png"/>
                    </a>
                </td>
                <td>
                    <a href="/edit/{{$product->id}}/{{$product->productName}}">
                        <img src="https://img.icons8.com/material-outlined/24/000000/update-left-rotation.png"/>
                    </a>
                </td>
                <td><a class="btn-close" aria-label="Close" href="/delete/{{$product->id}}"></a></td>
            </tr>
        @endforeach
    </table>
@endsection