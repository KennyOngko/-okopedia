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
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@if (session('message'))
    <div class="alert alert-success" role="alert">
    {{ session('message') }}
    </div>
 @endif
<form action="addproduct" enctype="multipart/form-data" method="POST" role="form"style="text-align:center">
@csrf
    <h3 class="tile-title">Add Product</h3>
    <hr>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder=Product_Name>
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlSelect1">Category</label>
        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
        @foreach($category as $cat)
        <option value="" disabled selected hidden>Select Category</option>
        <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Product Description"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Product Price">
    </div>              
    <div class="form-group">
        <label for="exampleFormControlFile1">Choose file</label>
        <input type="file" name="image" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button class="btn btn-xs btn-success"type="submit">Add Product</button>

</form>
</div>
    @endsection

  </body>
</html>