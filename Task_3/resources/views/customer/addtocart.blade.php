@extends('layouts.app')
@section('cart')
  <?php
    //$products = array();
    //session_start();

    $carts = $_SESSION['cart'];
    $productsArr = json_decode($carts);

    //print_r($productsArr);

    foreach($productsArr as $product){
      foreach($product as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
      }
      echo "<br>";
    }

    // if(count($productsArr) == 0){
    //   echo "Nothing added";
    // }
    // else{
      
    // }
    

  ?>
@endsection