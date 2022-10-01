<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
    <h1>This is Blogs Page</h1>
    <!-- Design a Menu -->
    <ul class = "menu-list">
        <li class = "menu-item"><a class = "menu-link" href="{{url('/home')}}">Home</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ URL::to('/about') }}">About</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ URL::to('/projects') }}">Projects</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ URL::to('/blog') }}">Blog</a></li>
        <li class = "menu-item"><a class = "menu-link" href="{{ URL::to('/contact') }}">Contact</a></li>
    </ul>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, tempora nihil eveniet voluptatem ad hic. Expedita ut sunt eum ducimus commodi porro ad vel, fugit adipisci incidunt fugiat accusantium numquam quasi delectus laboriosam deleniti cum repellendus? Ad enim officia consectetur doloremque exercitationem voluptatum accusamus quam odio dolore itaque dicta molestiae ex, quia sed eius. Enim laudantium voluptas dicta, voluptatem quidem hic. Facilis animi cumque error, modi veniam deleniti architecto quod. Autem pariatur minima harum, commodi tempora eum quas assumenda voluptate, mollitia praesentium velit obcaecati nulla nesciunt dignissimos nostrum ad molestias architecto, nobis consequuntur sit ex in iusto. Doloribus assumenda libero similique recusandae ipsum alias, dicta aspernatur beatae vel perspiciatis maiores nemo? Voluptate quo molestiae optio minus quasi cum animi laboriosam tenetur voluptas rem laudantium ex esse ea totam voluptatibus at iste tempora iusto praesentium quod, atque exercitationem amet. Quos aut omnis vero aliquam sunt esse explicabo accusantium hic quaerat quisquam fuga amet, odit fugiat rerum placeat voluptatum dolores, commodi impedit officia consectetur quas reprehenderit iure natus? Quam magnam quod minus aspernatur mollitia, iusto totam quos qui pariatur quaerat iste commodi sit ad atque nisi? Neque ab et, dolor doloribus animi dicta ipsum, ullam cumque odio nisi beatae ut, perferendis debitis.</p>
    
</body>
</html>