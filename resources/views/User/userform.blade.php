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
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{route('user.store')}}">
                            @csrf
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
                                <label for="gender" class="zmdi zmdi-account material-icons-name">Gender: </label> <br>
                                <label><input type="radio" name="gender" required value="male"> Male </label>
                                <label><input type="radio" name="gender" required value="female"> Female </label>
                                <label><input type="radio" name="gender" required value="Others"> Others </label>
                            </div><br>
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
                                <input type="checkbox" name="term" id="term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                @error('repass') <span style="color: red">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I have already signed up, Login here.</a>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>



