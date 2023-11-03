<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<style>
   /* Modal styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    border-radius: 5px;
    width: 80%;
    max-width: 400px;
}

.close {
    float: right;
    cursor: pointer;
}

/* Style the button to open the modal */
#openModalBtn {
    cursor: pointer;
}

/* Add more styles as needed */
/* Add this to your existing CSS */
.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #000;
}


</style>
<body>
    @extends('layouts.dashboard')

    @section('content')
        <h1>Users List</h1>
        <table class="table table-striped table-hover table-bordered table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-primary"><i class="bi bi-display"></i>Show</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning"><i class="bi bi-pencil"></i>Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                                    <i class="bi bi-trash3">Delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
<!-- The button to open the modal -->
<button class="btn btn-success" id="openModalBtn">
    <i class="bi bi-person-plus"></i>User
</button>

<!-- The modal dialog -->
<div id="userModal" class="modal">
    <div class="modal-content">
        <button id="closeModal" class="close-button bg-danger">X</button> <!-- Close button -->
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
</div>

<script>
    // Get the modal and the button to open it
    var modal = document.getElementById("userModal");
    var openBtn = document.getElementById("openModalBtn");
    var closeModalBtn = document.getElementById("closeModal");

    // Open the modal when the button is clicked
    openBtn.addEventListener("click", function() {
        modal.style.display = "block";
    });

    // Close the modal when the close button or the background is clicked
    closeModalBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
</script>


    @endsection
    
</body>
</html>
