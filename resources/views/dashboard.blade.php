<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    #userProfile{
        border: 5px solid red;
        width: 30%;
        height: 200px;
        content: unset;
        border-radius: 10%;
        margin-left: 70px; 
    }
    #userProfile :hover{
margin-left: 10px; 
    }
</style>
<body>
    <header class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">DancoteJr</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">

                     @auth
    @if(auth()->user()->hasRole('Admin'))
    <a class="nav-link" href="/dashboard">Dashboard</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#profile">Profile</a>
</li>
    @endif
@endauth


                       
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <h1>Welcome to the Dashboard</h1>
        <p>Here, you can view and manage your dashboard content.</p>
        <button id="toggleProfile" class="btn btn-primary">Click Here to view your profile</button>
    
        <div id="userProfile" class="mt-4" style="display: none;">
            <h2>Personal Details</h2>
            <div class="user-details">
                <p>Name: {{ Auth::user()->name }}</p>
                <p>Email: {{ Auth::user()->email }}</p>
                <!-- Add more user details as needed -->
            </div>
        </div>
    </main>
    
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2023 DancoteJr</p>
    </footer>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript to toggle the visibility of the user profile
        const toggleProfileButton = document.getElementById('toggleProfile');
        const userProfile = document.getElementById('userProfile');
    
        toggleProfileButton.addEventListener('click', () => {
            if (userProfile.style.display === 'none') {
                userProfile.style.display = 'block';
            } else {
                userProfile.style.display = 'none';
            }
        });
    </script>
</body>
</html>
