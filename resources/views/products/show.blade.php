<<<<<<< HEAD
@extends('layouts.dashboard') // Use your app layout or extend as needed
    @section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <h1>Items detailes</h1>
                <form class="bg-dark text-white p-4">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <img style="width: 200px; height:200px;border-radius:100px;" src="{{ asset('storage/'.$product->productImg)}}" alt="{{$product->productName}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">product Name:</label>
                        <input type="text" class="form-control" id="productName" value="{{ $product->productName }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">product Price:</label>
                        <input type="text" class="form-control" id="productName" value="{{ $product->productPrice }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">product Description:</label>
                        <div>
                            {{ $product->productDescription }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show product</title>
</head>
<body>
    @extends('layouts.dashboard')

@section('content')
    <h1>Product Details</h1>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Image:</strong></p>
    @if($product->image)
        <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
    @else
        <p>No image available</p>
    @endif
    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
@endsection

</body>
</html>
>>>>>>> 62d19a3380b67d2264b87390722ddfe74d35fad6
