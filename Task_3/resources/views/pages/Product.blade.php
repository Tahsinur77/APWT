@extends('layouts.app')
@section('product')
    <form action="{{route('check')}}" class="col-md-6" method="post">

        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>ID</span>
            <input type="text" name="productId" value="{{old('productId')}}" class="form-control">
            @error('productId')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="productName" value="{{old('productName')}}"class="form-control">
            @error('productName')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Price</span>
            <input type="text" name="price" value="{{old('price')}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Quantity</span>
            <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Description</span>
            <input type="text" name="description" value="{{old('description')}}" class="form-control">
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection