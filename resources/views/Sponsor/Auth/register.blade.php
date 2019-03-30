
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
                    <div class="col-md-6 text-center" style="background-size: cover;background-image: url('/sponsor/assets-2/images/photo-long-3.jpg')">
                        <div class="pl-3 auth-right">
                            <div class="auth-logo text-center mt-4">
                                <img src="/sponsor/assets-2/images/logo.png" alt="">
                            </div>
                            <div class="flex-grow-1"></div>
                            <div class="w-100 mb-4">
                                <a class="btn btn-outline-primary btn-outline-email btn-block btn-icon-text btn-rounded" href="{{route('login')}}">
                                    <i class="i-Mail-with-At-Sign"></i> Sign in with Email
                                </a>
                            </div>
                            <div class="flex-grow-1"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4">
                          @include('flash')
                            <h1 class="mb-3 text-18">Sign Up</h1>
                        <div class="section-head">
                            <h4 class="section-title animated" data-animate="fadeInUp" data-delay="0"></h4>
                        </div>

                            <form action="{{route('sponsor-registered')}}" method="post">
                              {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="first_name">Full Name</label>
                                    <input class="form-control form-control-rounded" type="text" required="" name="name" placeholder="Full Name">
                                    @if ($errors->has('name'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone number</label>
                                    <input class="form-control form-control-rounded" type="text" required="" name="phone_number" placeholder="Phonenumber">
                                    @if ($errors->has('phone_number'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                      </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input class="form-control form-control-rounded" type="email" required="" name="email" placeholder="Email">
                                    @if ($errors->has('email'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control form-control-rounded" type="password" required="" name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm Password</label>
                                    <input class="form-control form-control-rounded" type="password" required="" name="password_confirmation" placeholder="Password">
                                </div>

                                <button class="btn btn-primary btn-block btn-rounded mt-3" type="submit">Sign Up</button>
                            </form>
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
