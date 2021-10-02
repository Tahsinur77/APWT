@extends('layout.app')

@section('contant')
  <h3>We teach below cources.....</h3><br>

  <table>
    @foreach($services as $x)
      <tr><td>{{$x}}</td></tr>
    @endforeach
  </table>
@endsection

