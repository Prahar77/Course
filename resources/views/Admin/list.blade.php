<div class="overflow-x-auto">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
            <th>Id</th>
            <th>Course Name</th>
            <th>Price in USD ($)</th>
            <th>Credit Hours</th>
            <th>Course type</th>
            <th>Course Duration</th>
            <th>Requirements</th>
            <th>Description</th>
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
         </tr>
         @endforeach
      </tbody>
    </table>
  </div>
