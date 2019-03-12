@extends('layouts.app')

@section('content')
   <div class="container">
        <form action="{{ route('product.order') }}" method="post">
            <input type="hidden" name="product_id" value={{$product->id}}>

            @csrf
    <div class= "row">
    <div class ="col-md-3">
      <img src="{{$product->image}}" alt=""><br><br>
      <button class="mt-5 btn btn-primary">Order Now</button>
    </div>
    <div class="col-md-9">
        <label for="description" class="col-sm-2 col-form-label">Name :</label>{{ $product->name }}<hr><br>
        <label for="description" class="col-sm-2 col-form-label">Price :</label>{{$product->price}}<hr><br>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-8">Shipping Address </label>
            <textarea class="form-control col-sm-12 col-md-8" id="description" rows="3" name="address"></textarea>
        </div>
        <label for="description" class="col-sm-2 col-form-label">Amount :</label>
        <input type="number" name="quantity" id="myNumber">
    </div>
    
    @if(session()->has('needsAuth'))
      <div class="col-md-12 mt-5 alert alert-denger alert-dismissible fade show" role="alert">
        <strong>Hi there!</strong> You should log in first to buy out products.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
@endsection
