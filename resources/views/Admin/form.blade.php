    @extends('Admin.Layouts.master')
    @section('content')

    <div class="content-wrapper">
        <section class="content-header">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
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
            <input type="number" class="form-control" id="credit" name= "credit">
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
            <input type="number" class="form-control" id="duration" name = "duration">
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
            {{-- <a href="{{route('admin.index')}}" class="btn btn-primary"> Submit </a> --}}
            </div><br>
        </div>
        </fieldset>
        </form>
        </section>
    </section>
 </div>
@endsection
