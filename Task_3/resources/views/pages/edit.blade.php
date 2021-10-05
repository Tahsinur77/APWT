@extends('layouts.app')
@section('product')
    <form action="{{route('editSubmit')}}" class="col-md-6" method="post">

        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="col-md-4 form-group">
            <span>ID</span>
            <input type="text" name="productId" value="{{$product->productId}}" class="form-control">
            @error('productId')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="productName" value="{{$product->productName}}"class="form-control">
            @error('productName')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Price</span>
            <input type="text" name="price" value="{{$product->price}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description" value="{{$product->description}}" class="form-control">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection