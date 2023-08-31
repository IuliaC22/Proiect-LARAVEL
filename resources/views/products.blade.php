@extends('layouts.app')
@section('content')
    <a href="{{ route('cart')}}"><button type="button" class="btn btn-info">Cart</button></a>
    <a href="{{route('products.index')}}"><button type="button" class="btn btn-info">CRUD</button></a>
    <div class="row">
        @foreach($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->image }}"  width=400 height=400>
                <div class="caption">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}"
                                             class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
            </div>
        @endforeach

    </div>
@endsection
