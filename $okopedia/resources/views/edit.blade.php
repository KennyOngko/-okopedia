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
    <div class="row justify-content-center">
    <div class="card mb-3" style="max-width: 1000px">
    <div class="row no-gutters">
    <div class="col-md-6">
        <img class="card-img" src="{{asset('storage/'.($Product->image))}}" alt="Card image cap">
    </div>

    <div class="card-group col-md-6">
        <div class="card" style="width: 30rem; background-color: #E3E5E3">
            <div class="card-body justify-content-center">
            <div style ="padding-top: 20px; padding-left: 10px; text-align: justify;">
                <h4 class="card-title"><b>{{$Product->name}}</b></h4>
                <div class="border-bottom border-secondary" style="padding-bottom: 3px; opacity: 0.5"></div><br>
                <h4 style="float: left; padding-right: 5px">Price :<h4 Style="color: #FE612C"><b>IDR {{$Product->price}}</b></h4></h4><br>
                <div class="border-bottom border-secondary" style="padding-bottom: 3px; opacity: 0.5"></div><br>
                <h4 class="text">Description : {{$Product->description}}</h4><br>
                <h7>Quantity: 
                <form action ="{{route('update', $Product->id)}}" method="post">
                @method('patch')
                @csrf
                <input class="quantity" min="1" name="formQuantity" value="1" type="number" style="width: 40px"></h7><br><br>
                <button class="btn btn-success btn-sm" type="Submit"><h6>Update</h6></button>
                </form>
                
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    @endsection

  </body>
</html>