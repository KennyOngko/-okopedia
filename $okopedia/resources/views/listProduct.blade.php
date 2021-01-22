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
    <h3 class="tile-title" style="text-align: center">Product</h3>

    <table class="table table-striped table-bordered ">
  <thead class="table-success">
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Category</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($Product as $prod)
    <tr>
      <th scope="row">{{$prod->id}}</th>
      <td><img src="{{asset('storage/'.$prod->image)}}" style="max-width: 100px;"></td>
      <td>{{$prod->name}}</td>
      <td>{{$prod->category->name}}</td>
      <td>{{$prod->price}}</td>
      <td>{{$prod->description}}</td>
      <td><button onclick="location.href='/admin/delete/{{$prod->id}}'" class="btn btn-xs btn-danger">Delete</button></td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
    @endsection

  </body>
</html>