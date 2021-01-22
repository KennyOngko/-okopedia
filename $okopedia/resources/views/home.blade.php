<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Style -->
    <style>
      .card-img-top{
        height:250px;
      }

      .konten{
        position: absolute;
        padding-left: 20px;
        padding-top:20px;
        background-color:#E9ECEB;
        height: 2000px;
        width: 1460px;
        left: 30px;
        top: 100px;
        padding-right: 30px;
      }
      </style>

    <title>$okopedia</title>
  </head>
  <body>
@extends('layouts.app')

@section('content')



<div class="card-group justify-content-center">
        <div class="row justify-content-center">
        @if($Product->isNotEmpty())
      @foreach($Product as $productlist)
      <div style="padding-right: 50px"> 
        <div class="card" style="width: 18rem">
          <img class="card-img-top  border-bottom" src="{{asset('storage/'.$productlist->image)}}" alt="Card image cap">
        <div class="card-body justify-content-center">
          <h5 class="card-title text-primary d-inline-block text-truncate"  style="max-width: 250px;">{{$productlist->name}}</h5>
          <h5 class="card-title" style="font-size: 10pt">IDR {{$productlist->price}}</h5>
          <a href="{{route('detail',$productlist->id)}}" class="btn btn-success btn-sm btn-block align-item-end" >Produk Detail</a>
        </div>
        </div>
        </div>
      @endforeach
      @else 
    <div>
        <h2><b>No products found<b></h2>
        <h5><center>Try other keywords</center></h5>
    </div>
    @endif
        </div>
</div>
</div>

<div class="card-group justify-content-center">
{{$Product->links()}}
</div>

@endsection

  </body>
</html>