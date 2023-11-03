@extends('layouts.dashboard') 


@section('content')
    <h1>Edit Product</h1>
    <div class="container">
        <form class="col-6 p-2 mb-3 offset-4 bg-dark text-white" method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
            @csrf
            @method('PATCH')
    
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <img style="width: 200px; height:200px;border-radius:100px;" src="{{ asset('storage/'.$product->productImg)}}" alt="{{$product->productName}}">
                </div>
            </div>
            <div style="display: none" class="form-group">
                <label for="name">product Name:</label>
                <input type="number" name="productId" class="form-control" id="productName" value="{{ $product->id }}" >
            </div>
            <div class="form-group">
                <label for="name">product Name:</label>
                <input type="text" name="productName" class="form-control" id="productName" value="{{ $product->productName }}" >
            </div>
            <div class="form-group">
                <label for="name">product Price:</label>
                <input type="text" name="productPrice" class="form-control" id="productName" value="{{ $product->productPrice }}" >
            </div>
            <div class="form-group">
                <label for="name">product Description:</label>
                <input type="text" name="productDescription" class="form-control" id="productName" value="{{ $product->productDescription }}">   
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">upload img</label>
                <input name="img" class="form-control" type="file" id="formFile">
            </div>
    
            <button type="submit" class="btn btn-primary mt-3">Update Product</button>
        </form>
    </div>   
@endsection