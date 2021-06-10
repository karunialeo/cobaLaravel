@extends('layout/main')

@section('title', 'Details | Hendry Audio')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-4">Product Details</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->products }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">${{ $product->price }}</h6>
                    <p class="card-text">A great {{ $product->products }} for {{ $product->description }}. Estimated Time {{ $product->est_time }}.</p>
                    <p class="card-text">{{ $product->vendor }}</p>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/products" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection