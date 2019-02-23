@extends('layouts.app')

@section('title')
    VShop
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-xl-3 col-md-4 col-sm-6 ">
                <a href="{{ route('product.view', $product->id) }}">
                <div class="card mb-4 shadow-sm" style=" :hover">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                    <p class="card-title" style="color:black; font-weight:bold;">{{ $product->name }}</p>
                    <span>
                        <p class="d-inline text-muted">Price : </p> 
                        <del class="d-inline text-denger"> {{$product->price}}</del>
                    </span>
                    <span class="float-right">
                        <p class="d-inline text-muted"> Discount : </p> 
                        <p class="d-inline text-muted"> {{$product->discount}}%</p>
                    </span>
                    <br>
                    <span>
                        <p class="d-inline">New Price : </p> 
                        <strong class="d-inline" style="color:seagreen"> {{((100- $product->discount)*$product->price)/100}}</strong>
                    </span>
                    
                    {{--<p class="card-text">{{ $product->description }}</p>--}}
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            {!! $products->links() !!}
        </div>
    </div>
</div>
@endsection