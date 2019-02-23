@extends('layouts.app')

@section('content')
   <div class="container">
        <form action="{{ route('product.order') }}" method="post">
            <input type="hidden" name="product_id" value={{$product->id}}>

            @csrf
    <div class= "row">
    <div class ="col-md-3">
      <img src="{{$product->image}}" alt=""><br><br>
      <button class="btn primary">Order Now</button>
    </div>
    <div class="col-md-9">
            <label for="description" class="col-sm-2 col-form-label">Name :</label>{{ $product->name }}<hr><br>
        <label for="description" class="col-sm-2 col-form-label">Price :</label>{{$product->price}}<hr><br>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-8">Shipping Address </label>
            <textarea class="form-control col-sm-12 col-md-8" id="description" rows="3" name="address"></textarea>
        </div>
        <label for="description" class="col-sm-2 col-form-label">Amount :</label><input type="number" name="amount" id="myNumber">
@endsection
