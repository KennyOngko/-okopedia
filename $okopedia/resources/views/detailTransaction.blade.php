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
<h3>Detail Transaction</h3>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
      @foreach($transaction as $trans)
        <div class="col-md-4 border-bottom" style="padding-top: 7%; padding-left: 10px">
           <img class="card-img" src="{{asset('storage/'.$trans->product->image)}}" alt="Card image cap">
        </div>
        <div class="col-md-8 border-bottom">
          <div class="card-body">
            <h5 class="card-title">{{$trans->product->name}}</h5>
            <p class="card-text">Quantity : {{$trans->Quantity}}</p>
            <p class="card-text">Price : IDR {{$trans->product->price * $trans->Quantity}}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    </div>
    @endsection

  </body>
</html>