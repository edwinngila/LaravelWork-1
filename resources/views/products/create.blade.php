<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create product</title>
</head>
<body>
    @extends('layouts.dashboard')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
        <br>
        <button type="submit">Create</button>
    </form>
@endsection

</body>
</html>