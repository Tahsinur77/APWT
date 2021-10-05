@extends('layouts.app')
@section('product')
    <table class="table table-borded">
    <?php
        session_start();
        $customerName=$_SESSION['customerName'];
        $customerPhone=$_SESSION['customerPhone'];
    ?>
        <tr>
            <th>Product Id</th>
            <th>Name</th>
            <th>price</th>
            <th>quantity</th>
            <th>description</th>

            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->productId}}</td>
                <td>{{$product->productName}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td><a href="/edit/{{$product->id}}/{{$product->productName}}">Update</a></td>
                <td><a href="/delete/{{$product->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection