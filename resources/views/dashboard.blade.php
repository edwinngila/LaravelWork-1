
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<style>
    /* Add your CSS styles here */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
}

</style>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Welcome to the Dashboard</h1>
        <!-- Your dashboard content goes here -->
        <p>Here, you can view and manage your dashboard content.</p>
        <p>Click <button id="toggleProfile">Click Here</button>to view your profile.</p>
    
        <!-- Add a button or link to toggle the user profile -->
        
    
        <div id="userProfile" style="display: none;">
            <h1>Personal Details</h1>
            <!-- Display user details -->
            <div class="user-details">
                <p>Name: {{ Auth::user()->name }}</p>
                <p>Email: {{ Auth::user()->email }}</p>
                <p>Password: {{ Auth::user()->password }}</p>
                <!-- Add more user details as needed -->
            </div>
        </div>
    </main>
    
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
    
    </main>

    <footer>
        <p>&copy; 2023 Your Company Name</p>
    </footer>
</body>
</html>
