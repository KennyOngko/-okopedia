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
<center>
    <div class="list-group" style="width: 75%">
    <a class="list-group-item list-group-item-action bg-success" style="text-align: left; color: white; font-weight: bold">
        Transaction History
    </a>
    @foreach($transaction as $trans)
    <a href="{{route('detailtransaction',$trans->date )}}" class="list-group-item list-group-item-action" style="text-align: left">{{$trans->date}}</a>
    @endforeach
    </div>
</center>
    @endsection

  </body>
</html>