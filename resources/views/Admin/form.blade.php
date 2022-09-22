<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #1069d6;">
  <a class="navbar-brand" href="#">Coursecom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Course form <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Course Data</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Students Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Students Data</a>
          <a class="dropdown-item" href="#">Extra</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>

  </div>
</nav>


</head>
<body>
<h1> COURSES ENTRY </h1>
        <section>
        <form class="row g-3" method="post" action="{{route('admin.store')}}">

        @csrf
        <div class="d-flex flex-column justify-content-center w-100 h-100"></div>
        <div class="block"></block>
        <!-- <div></div> -->
        <fieldset>
        <div class= "formfont">
        <div class="col-md-12">
            <label for="coursename" class="form-label" >Course Name: </label>
            <input type="text" class="form-control" id="coursename" name="coursename">
            @error('coursename') <span style="color: red">{{$message}}</span> @enderror
        </div>
        <div class="col-md-3">
            <label for="price" class="form-label">Price in USD ($): </label>
            <input type="text" class="form-control" id="price" name= "price">
            @error('price') <span style="color: red">{{$message}}</span> @enderror
        </div>
        <div class="col-12">
            <label for="credit" class="form-label">Credit Hours: </label>
            <input type="text" class="form-control" id="credit" name= "credit">
            @error('credit') <span style="color: red">{{$message}}</span> @enderror
        </div>
        <div class="col-12">
            <label for="type" class="form-label">Course type: </label> <br>
            <label><input type="radio" name="type" required value="laptop"> Compulsory </label>
            <label><input type="radio" name="type" required value="copy"> Optional </label>
            @error('type') <span style="color: red">{{$message}}</span> @enderror
        </div><br>
        <div class="col-md-12">
            <label for="duration" class="form-label">Course Duration: </label>
            <input type="text" class="form-control" id="duration" name = "duration">
            @error('duration') <span style="color: red">{{$message}}</span> @enderror
        </div>

        <div class="col-md-4">
            <label for="requirement" class="form-label">Requirements</label>
            <select id="requirement" class="form-select" name="requirement">
            <option selected>Choose...</option>
            <option>Laptop / Desktop</option>
            <option>Laptop with high specifications</option>
            <option>Pen / Copy</option>
            </select>
            @error('requirement') <span style="color: red">{{$message}}</span> @enderror
        </div>

        <div class="col-md-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" maxlength="500"></textarea>
            @error('description') <span style="color: red">{{$message}}</span> @enderror
        </div> <br>


        <div class="col-3">
            <button type="submit" class="btn btn-primary">Submit</button>

            </div><br>
        </div>
        </fieldset>
        </form>
        </section>
</body>
</html>
