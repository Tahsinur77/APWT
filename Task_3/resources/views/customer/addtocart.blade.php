@extends('layouts.app')
@section('cart')
  <?php

    if(isset($_SESSION['cart'])!= null){
      $carts = $_SESSION['cart'];
      $productsArr = json_decode($carts);

      $_SESSION['list'] = json_encode($productsArr);

      //print_r($productsArr);

      foreach($productsArr as $product){
        //print_r($product);
        foreach($product as $x => $x_value) {
          echo $x . " =" . $x_value;
        }
        echo "<br>";
      }
  }
  else{
    echo "Nothing added";
  }
    

  ?>
@endsection