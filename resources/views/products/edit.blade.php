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