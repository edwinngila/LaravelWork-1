<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea>
        <br>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
        <br>
        <button type="submit">Update</button>
    </form>
@endsection

</body>
</html>
>>>>>>> 62d19a3380b67d2264b87390722ddfe74d35fad6
