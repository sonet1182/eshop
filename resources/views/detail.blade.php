@extends('master')

@section('content')

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-sm-6">
            <img src="{{ $products['gallery'] }}" alt="" height="300" width="400">
        </div>

        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2 class="py-3">{{ $products['name'] }}</h2>
            <h3 class="pb-2">Price: {{ $products['price'] }} $</h3>
            <h5>Details: {{ $products['description'] }}</h5>
            <h5>Category: {{ $products['category'] }}</h5>
            <br>
            <button class="btn btn-primary py-2 px-4">Add to Cart</button><br><br>
            <button class="btn btn-success py-2 px-4">Buy Now</button>
        </div>
    </div>

</div>

@endsection
