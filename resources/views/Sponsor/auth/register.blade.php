<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CocoaDowo | Nigeria's Number one Digital Cocoa Farming Platform</title>
    <link rel="stylesheet" type="text/css" href="/fauth/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/fauth/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/fauth/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/fauth/css/iofrm-theme8.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="/">
                <div class="loglo">
                    <img class="logo-size" src="/front/img/logo/logo.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Cocoadowo.</h3>
                    <img src="/fauth/images/graphic4.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="/">
                                <div class="losgo">
                                    <img class="logo-size" src="/front/img/logo/logo.png" style="width: 50vh;margin-left: -40px;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="{{route('login')}}">Login</a><a href="" class="active">Register</a>
                        </div>
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            @if ($errors->has('name'))
                              <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                              </span>
                            @endif
                            <input class="form-control" type="text" name="phone_number" placeholder="Phonenumber" required>
                            @if ($errors->has('phone_number'))
                              <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                              </span>
                            @endif
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            @if ($errors->has('email'))
                              <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                              <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                            @endif
                            <input class="form-control" type="password" name="password_confirmation" placeholder="confirm Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button> 
                                <a href="forget8.html">Forget password?</a>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/fauth/js/jquery.min.js"></script>
<script src="/fauth/js/popper.min.js"></script>
<script src="/fauth/js/bootstrap.min.js"></script>
<script src="/fauth/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2019 17:34:29 GMT -->
</html>