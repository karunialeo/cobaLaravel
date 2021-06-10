@extends('layout/main')

@section('title', 'Add Product | Hendry Audio')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-4">Add Product</h1>

            <form method="POST" action="/products">
                @csrf
                <div class="form-group">
                    <label for="products">Product Name</label>
                    <input type="text" class="form-control" id="products" placeholder="Insert Product Name" name="products">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Insert price" name="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Insert description" name="description">
                </div>
                <div class="form-group">
                    <label for="est_time">Estimated Time</label>
                    <input type="text" class="form-control" id="est_time" placeholder="Insert estimated time" name="est_time">
                </div>
                <div class="form-group">
                    <label for="vendor">Vendor</label>
                    <input type="text" class="form-control" id="vendor" placeholder="Insert vendor" name="vendor">
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>

            </form>

        </div>
    </div>
</div>
@endsection