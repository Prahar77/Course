<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/details.css')}}">
</head>

<body>
    <h1> Details </h1>
    <h2> About this course</h2>
    <img src="{{asset('img/film.jpg')}}" class="card-img-top" alt="Movie">
    <br>
    <h3 class="card-title">{{$course->coursename}}</h3>
    <br>
    <br>
         <h5> Price in USD ($) </h5> <h4> {{$course->price}}</h4>
    <br> <h5> Credit Hours </h5> <h4>{{$course->credit}}</h4>
    <br> <h5> Course type </h5> <h4>{{$course->type}}</h4>
    <br> <h5> Course Duration: </h5> <h4>{{$course->duration}}</h4>
    <br> <h5> Requirements: </h5> <h4>{{$course->requirement}}</h4>
    <br> <h5> Description: </h5> <h4>{{$course->description}} </h4>  
</body>
</html>