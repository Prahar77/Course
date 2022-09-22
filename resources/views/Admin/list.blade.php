<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title"> Courses list </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Course Name</th>
                    <th>Price in USD ($)</th>
                    <th>Credit Hours</th>
                    <th>Course type</th>
                    <th>Course Duration</th>
                    <th>Requirements</th>
                    <th>Description</th>
                    <th>Admin bar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($courses as $key => $course)
                 <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$course->coursename}}</td>
                    <td>{{$course->price}}</td>
                    <td>{{$course->hours}}</td>
                    <td>{{$course->type}}</td>
                    <td>{{$course->duration}}</td>
                    <td>{{$course->requirement}}</td>
                    <td>{{$course->description}}</td>
                    <td> <a href="{{route('admin.show',$course->id)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('admin.edit',$course->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('admin.delete',$course->id)}}" class="btn btn-primary">Delete</a> </td>
                 </tr>
                 @endforeach
              </tbody>
          </table>
        </div>
    </div>

</body>
</html>

