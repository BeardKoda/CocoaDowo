<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CocoaDowo | Nigeria's Number one Digital Cocoa Farming Platform</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="/sponsor/assets-2/styles/css/themes/lite-purple.min.css">
</head>

<body>
    <div class="auth-layout-wrap" style="background-image: url('/sponsor/assets-2/images/photo-wide-4.jpg')">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center">
                                <img src="/front/img/logo/logo.png" style="width:200px;" alt="">
                            </div>
                              @include('flash')
                            <h1 class="mb-3 text-18">Sign In</h1>
                            <form action="" method="post">
                              {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="username">email</label>
                                    <input id="email" class="form-control form-control-rounded" type="text" required="" placeholder="Email" name="email">
                                    @if ($errors->has('email'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control form-control-rounded" type="password" required="" placeholder="Password" name="password">
                                    @if ($errors->has('password'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                    @endif
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2" type="submit">Sign In</button>

                            </form>

                            <div class="mt-3 text-center">
                                <a href="forgot.html" class="text-muted"><u>Forgot Password?</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center" style="background-size: cover;background-image: url(/sponsor/assets-2/images/photo-long-3.jpg)">
                        <div class="pr-3 auth-right">
                            <a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="{{route('register')}}">
                                <i class="i-Mail-with-At-Sign"></i> Sign up with Email
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/sponsor/assets-2/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/sponsor/assets-2/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/sponsor/assets-2/js/es5/script.min.js"></script>
</body>

</html>
