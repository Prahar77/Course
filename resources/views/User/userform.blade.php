<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> USER PROFILE SIGN UP FORM </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/userstyle.css">
</head>
<body>
    <h1>USER PROFILE SIGN UP FORM</h1>
    <section>
        <form class="row g-3" method="post" action="{{route('user.store')}}">

        @csrf
        <div class="d-flex flex-column justify-content-center w-100 h-100"></div>
        <div class="block"></block>
        <!-- <div></div> -->
        <fieldset>
        <div class= "formfont">
        <div class="col-md-4">
            <label for="firstname" class="form-label" >First Name: </label>
            <input type="text" class="form-control" id="firstname" name="firstename">
            @error('coursename') <span style="color: red">{{$message}}</span> @enderror
        </div>

        <div class="col-md-4">
            <label for="lastname" class="form-label" >Last Name: </label>
            <input type="text" class="form-control" id="lastname" name="lastname">
            @error('lastname') <span style="color: red">{{$message}}</span> @enderror
        </div>


        <div class="col-12">
            <label for="credit" class="form-label">Credit Hours: </label>
            <input type="text" class="form-control" id="credit" name= "credit">
        </div>
        <div class="col-12">
            <label for="type" class="form-label">Course type: </label> <br>
            <label><input type="radio" name="type" required value="laptop"> Compulsory </label>
            <label><input type="radio" name="type" required value="copy"> Optional </label>
        </div><br>
        <div class="col-md-12">
            <label for="duration" class="form-label">Course Duration: </label>
            <input type="text" class="form-control" id="duration" name = "duration">
        </div>

        <div class="col-md-4">
            <label for="requirement" class="form-label">Requirements</label>
            <select id="requirement" class="form-select" name="requirement">
            <option selected>Choose...</option>
            <option>Laptop / Desktop</option>
            <option>Laptop with high specifications</option>
            <option>Pen / Copy</option>
            </select>
        </div>

        <div class="col-md-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" maxlength="500"></textarea>
        </div> <br>


        <div class="col-3">
            <button type="submit" class="btn btn-primary">Submit</button>

            </div><br>
        </div>
        </fieldset>
        </form>
        </section>




    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="firstname"><i class="zmdi zmdi-account material-icons-name"> First Name: </i></label>
                                <input type="text" name="firstname" id="firstname" placeholder="Your First Name"/>
                                @error('firstname') <span style="color: red">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="lastname"><i class="zmdi zmdi-account material-icons-name"> Last Name: </i></label>
                                <input type="text" name="lastname" id="lastname" placeholder="Your Last Name"/>
                                @error('lastname') <span style="color: red">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone"> <i class="zmdi zmdi-account material-icons-name"> Phone Number: </i></label>
                                <input type="tel" class="form-control" id="phone" name= "phone">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"> Email address: </i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                                @error('email') <span style="color: red">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"> Password: </i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                                @error('pass') <span style="color: red">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="repass"><i class="zmdi zmdi-lock-outline"> Confirm Password: </i></label>
                                <input type="password" name="repass" id="repass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                @error('repass') <span style="color: red">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>



