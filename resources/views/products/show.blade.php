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