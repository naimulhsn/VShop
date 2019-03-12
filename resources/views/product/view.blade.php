@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ $product->image }}" alt=""> <br>
                    <a href="{{ route('product.buy', $product->id)}}">
                        <button class="btn btn-primary mt-5">Buy now</button>
                    </a>
            </div>
            <div class="col-md-9">
                <p class='d-inline'>Name : </p> <b>{{ $product->name }}</b> <hr>
                <p class='d-inline'>Previous Price : </p><del> {{ $product->price }}</del> <hr>
                <p class='d-inline'>Discount : </p><b> {{ $product->discount }}% </b><hr>
                <p class='d-inline'>New Price : </p><b> {{ $product->price*(100- $product->discount)/100  }} </b><hr>
                <p class='d-inline'>Description : </p> 
                <b>{{ $product->description }}</b>
            </div>
            
            @if(session()->has('needsAuth'))
                <div class="col-md-12 mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Hi there!</strong>  {{ session()->get('needsAuth') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
        
    </div>
@endsection