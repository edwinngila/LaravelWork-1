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
label{
    font-size: larger;
    color: #45a049;
    font-family: monospace;
    font-weight: bold;
}
form {
    width: 30%;
  margin: 0 auto;
  border:1.5px solid grey;
  border-radius:20px;
  padding:50px 20px;
  margin: 0 auto;
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
  border-radius:20px;
}
    </style>
</head>
<body>
    <div>
        @csrf
        @if (session('msg'))

        <marquee direction="up" behavior="slide" height="50%">{{session('msg')}}</marquee>

        @endif
    </div>
<form action="/login" method="get">
    <label for="name">Username:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Sign up">
  </form>
</body>
</html>