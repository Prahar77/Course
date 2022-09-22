<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
</head>
<body>

    <h1> Courses Available </h1>
    <div class="container" >
   <div class="row">
      @foreach($courses as $key => $course)
       <div class="col-3">
         <div class="card" id= "box" style="width: 20rem;">
            <img src="{{asset('img/course.png')}}" class="card-img-top" alt="Course">
              <div class="card-body">
            <h5 class="card-title">{{$course->coursename}}</h5>
            <p> <br>Price in USD ($): {{$course->price}}</p>

            <a href="{{route('show',$course->id)}}" class="btn btn-primary">Book</a>
            <a href="{{route('show',$course->id)}}" class="btn btn-primary">Details</a>
            <a href="{{route('edit',$course->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('delete',$course->id)}}" class="btn btn-primary">Delete</a>
          </div>
        </div>

    </div>

      @endforeach

</body>
</html>
