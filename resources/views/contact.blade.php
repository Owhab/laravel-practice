<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        .menu-list{
            list-style: none;
        }
        .menu-item{
            display: inline;
            padding: 10px;
            background-color: #8BBCCC;

        }
        .menu-item:hover{
            background-color: #31C6D4;

        }
        .menu-link{
            text-decoration: none;
            font-size: 22px;
            color: #fff;
        }
        
        
    </style>
</head>
<body>
    <h1>This is Contact Page</h1>
    <!-- Design a Menu -->
    <ul class = "menu-list">
        <li class = "menu-item"><a class = "menu-link" href="{{url('/home')}}">Home</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ URL::to('/about') }}">About</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ URL::to('/projects') }}">Projects</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ URL::to('/blog') }}">Blog</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ route('con') }}">Contact</a></li>
    </ul>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, impedit.</p>
    <label for="name">Name: </label>
    <input type="text" placeholder = "Enter your name" name = "name">
    
    <label for="email">Email: </label>
    <input type="email" placeholder = "Enter your email" name = "email">
    <label for="password">Password: </label>
    <input type="password" placeholder = "Enter your Password" name = "password">
    <button type = "submit"> Submit</button>

    
</body>
</html>