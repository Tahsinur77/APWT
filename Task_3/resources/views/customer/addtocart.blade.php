@extends('layouts.app')
@section('cart')
  <?php
    if(isset($_SESSION['cart'])!= null){
      $carts = $_SESSION['cart'];
      $productsArr = json_decode($carts);

      $_SESSION['list'] = json_encode($productsArr);
    }
  ?>
  @if(isset($_SESSION['cart'])!= null)
    <table class="table table-borded">

          <tr>
              <th>Product Id</th>
              <th>Name</th>
              <th>price</th>
              <th>quantity</th>
              <th>description</th>

              <th></th>
          </tr>

        @foreach($productsArr as $product)
          <tr>
            @foreach($product as $x => $x_value) 
              @if($x != 'id')
                <td>{{$x_value}}</td> 
              @endif
            @endforeach
          </tr>
        @endforeach
    
    </table>
    <a class="btn btn-danger" href="/list">Add More</a>

  @else
    <p>Nothing Add</p>
    <a class="btn btn-danger" href="/list">Add</a>
  @endif



@endsection