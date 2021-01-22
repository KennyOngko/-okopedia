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
<form action="categoryAdded" method="POST" role="form"style="text-align:center">
@csrf
    <h3 class="tile-title">Add Category</h3>
    <hr>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder='Category Name'>
    </div>
    <button class="btn btn-xs btn-success"type="submit">Add Product</button>

</form>
</div>
    @endsection

  </body>
</html>