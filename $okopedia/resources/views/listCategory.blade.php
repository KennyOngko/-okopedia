<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>$okopedia</title>
  </head>
  <body>
@extends('layouts.adm')

@section('content')
<div class="container bg-white shadow-lg p-3 mb-5 bg-white rounded"style="padding-bottom:50px">
<form action="categoryAdded" method="POST" role="form"style="text-align:center">
@csrf
    <h3 class="tile-title">Category</h3>
    <hr>
    @foreach($Category as $categorylist)
    <div class="form-group">
        <a href="{{route('detailcategory',$categorylist->id)}}" class="list-group-item list-group-item-action" style="font-size: 12pt">{{$categorylist->name}}</a>
        
    </div>
    @endforeach
</form>
</div>
    @endsection
  </body>
</html>