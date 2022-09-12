<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>

    <h1>Projects List</h1>
    <!-- <p>{{$projects}}</p> -->
    
    <table border = "1">
        <tr>
            <th>ID </th>
            <th>Title</th>
            <th>Desctiption</th>
            <th>Author</th>
            <th>Type</th>
        </tr>
        @foreach($projects as $project)
        <tr>
            <td>{{$project -> id}} </td>
            <td>{{$project -> title}}</td>
            <td>{{$project -> description}}</td>
            <td>{{$project -> author}}</td>
            <td>{{$project -> type}}</td>
        </tr>
        @endforeach
    </table>

    <a href= "{{route('welcome-page')}}">Welcome</a>
    
    
</body>
</html>