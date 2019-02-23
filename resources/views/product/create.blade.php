@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-12 col-md-8">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-12 col-md-8">
                    <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                </div>
            </div>
            <div class="form-group row">
                <label for="discount" class="col-sm-2 col-form-label">Discount</label>
                <div class="col-sm-12 col-md-8">
                    <input type="text" class="form-control" name="discount" id="discount" placeholder="Discount">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <textarea class="form-control col-sm-12 col-md-8" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="form-group row">
                <div class="offset-md-9"></div>
                <div class="col-md-2">
                    <button class="btn btn-primary pull-right">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection