<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
<body>
    <ul>
        <li><button><a href="">Home</a></button></li>
        <li><button><a href="">About</a></button></li>
        <li><button><a href="">Services </a></button></li>
        <li><button><a href="/login">Login</a></button></li>
        <li><button><a href="/signup">Signup</a></button></li>

    </ul>

    @extends('layouts.default')

    @session
</body>
</html>