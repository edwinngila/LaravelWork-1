<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
}
form {
  width: 30%;
  margin: 0 auto;
  border:1.5px solid grey;
  border-radius:20px;
  padding:50px 20px;

}
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius:20px;
}
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  border-radius:20px;
}
input[type="submit"]:hover {
  background-color: #45a049;
  
}
ul li{
        display: inline; 
        margin-left:40px;
        float:right;
    }
    ul{
        background-color: DodgerBlue;
        height:30px;
    }
    button{
        background-color:Violet ;
    }
    </style>
</head>
<body>
  <div class="top-nav">
<ul>
        <li><button><a href="">Home</a></button></li>
        <li><button><a href="">About</a></button></li>
        <li><button><a href="">Services </a></button></li>
        <li><button><a href="/login">Login</a></button></li>
        <li><button><a href="/signup">Signup</a></button></li>

    </ul>
  </div>
<form action="/signup" method="post">
  @csrf
    <label for="name">Username:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Sign up">
  </form>
</body>
</html>