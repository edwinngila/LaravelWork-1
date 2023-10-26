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
        width: 250px;
        height: 250px;
        display: contents;
        border-radius: 50%;
        margin-left: 70px; 
    }
    #userProfile :hover{
margin-left: 10px; 
    }
</style>
<body>
    {{-- Header --}}
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
    <a class="nav-link" href="/dashboard">dashboard </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('users.index') }}">manage users</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#profile">manage roles</a>
</li>
    @endif
@endauth


<li class="nav-item">
    <a class="nav-link" href="{{ route('products.index') }}">manage products</a>
</li>
 <li class="nav-item">
  <a class="nav-link" href="/logout">Logout</a>
     </li>
     </ul>
                </div>
            </div>
        </nav>
    </header>

        {{-- Navigation --}}




        
    @yield('content')


    
      {{-- Footer --}}
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2023 DancoteJr</p>
    </footer>

    

</body>
</html>
