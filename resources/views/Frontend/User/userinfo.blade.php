<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('Layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title"> Users list </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>User bar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($courses as $key => $course)
                 <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$course->firstname}}</td>
                    <td>{{$course->lastname}}</td>
                    <td>{{$course->phone}}</td>
                    <td>{{$course->gender}}</td>
                    <td>{{$course->email}}</td>
                    <td>{{$course->pass}}</td>
                    <td> <a href="{{route('user.show',$course->id)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('user.edit',$course->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('user.delete',$course->id)}}" class="btn btn-primary">Delete</a> </td>
                 </tr>
                 @endforeach
              </tbody>
          </table>
        </div>
    </div>

</body>
</html>

