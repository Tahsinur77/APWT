@extends('layouts.app')
@section('login')
    <form action="{{route('customer.validation')}}" class="col-md-6" method="post">

        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="customerName" value="{{old('customerName')}}"class="form-control">
            @error('customerName')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Phone Number</span>
            <input type="text" name="customerPhone" value="{{old('customerPhone')}}" class="form-control">
            @error('customerPhone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <br>
        <input type="submit" class="btn btn-success" value="Login" >
    </form>
@endsection