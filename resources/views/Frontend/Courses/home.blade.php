@extends('Admin.Layouts.master')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
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

            <a href="{{route('admin.show',$course->id)}}" class="btn btn-primary">Book</a>
            <a href="{{route('admin.show',$course->id)}}" class="btn btn-primary">Details</a>
            <a href="{{route('admin.edit',$course->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('admin.delete',$course->id)}}" class="btn btn-primary">Delete</a>
          </div>
        </div>
       </div>
    </section>
    </div>

   @endforeach

@endsection

