@extends('products.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Product View</h2>
    </div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name : {{ $products->product_name }}</h5>
            <p class="card-text">Description : {{ $products->description }}</p>
            <p class="card-text">Quantity : {{ $products->quantity }}</p>
            <p class="card-text">Price : {{ $products->price }}</p>
        </div>
        <br>
        <a href="{{ url('/product') }}" class="btn btn-success btn-sm" title="Add New Product">
            <i class="fa fa-plus" aria-hidden="true"></i> Back
        </a>
        </hr>

    </div>
</div>