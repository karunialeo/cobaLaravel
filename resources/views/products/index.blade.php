@extends('layout/main')

@section('title', 'Products | Hendry Audio')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-4">Products List</h1>
            <a href="/products/create" class="btn btn-primary my-3">Add Products</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <ul class="list-group">
                @foreach ($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $product->products }}
                    <a href="/products/{{ $product->id }}" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
<!-- <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Products</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Estimated Time</th>
                        <th scope="col">Vendor</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $products as $p )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->products }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->est_time }}</td>
                        <td>{{ $p->vendor }}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> -->