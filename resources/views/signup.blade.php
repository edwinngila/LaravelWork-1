<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your custom CSS styles here */
        body {
            background: #92e296;
        }
        .container {
            margin-top: 50px;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    @extends('layouts.default')
    @section('content')
    <div class="container">
        <form action="/signup" method="post" class="border p-4 bg-light rounded">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username:</label>
                <input type="text" id="name" name="name" class="form-control">
                @if ($errors->has('name'))
                <div class="error-message">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
                @if ($errors->has('email'))
                <div class="error-message">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
                @if ($errors->has('password'))
                <div class="error-message">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
    @endsection

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
