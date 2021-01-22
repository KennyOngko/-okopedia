<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>$okopedia</title>
  </head>
  <body>
@extends('layouts.app')

@section('content')

    <div style="position: absolute; left: 12%">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        @foreach($Cart as $cart)
        <div class="col-md-4 border-bottom" style="padding-top: 7%; padding-left: 10px">
           <img class="card-img" src="{{asset('storage/'.$cart->product->image)}}" alt="Card image cap">
        </div>
        <div class="col-md-8 border-bottom">
          <div class="card-body">
            <h5 class="card-title">{{$cart->product->name}}</h5>
            <p class="card-text">Product Price : IDR {{$cart->product->price}}</p>
            <p class="card-text"><small class="text-muted">Quantity : {{$cart->Quantity}}</small></p>
            <button onclick="location.href='/cart/delete/{{$cart->id}}'" class="btn btn-xs btn-danger">Delete</button>
            <button onclick="location.href='/cart/edit/{{$cart->product->id}}'" class="btn btn-xs btn-success">Edit</button>
          </div>
          </div>

        @endforeach
    </div>
    </div>
    @if(!$Cart->isEmpty())
      <button onclick="location.href='/checkout'" class="btn btn-xs btn-danger">Check Out</a>
    @else
      <div style="width: 1150px;text-align: center"> 
      <h2><b>There is no products in your shopping cart<b></h2>
      <button onclick="location.href='/home'" class="btn btn-xs btn-success">Buy now</button>
      </div>   
    @endif
    </div>
    @endsection

  </body>
</html>