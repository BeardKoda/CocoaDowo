@extends('Admin.auth.app')
@section('content')
<div id="ajax-content" class="light h-v d-flex flex align-items-center">
    <div class="mx-auto w-xl w-auto-xs animate fadeIn text-center" style="width: 340px;padding: 30px;background: #eee;">
        <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <!-- <img src="/logos.png" class="w-72 circle"> -->
                <div class="mt-3 font-bold"><h4>Admin - Login</h4></div>
                <br />
            </div>
            <div class="md-form-group">
                <input id="email" type="email" class="md-input text-center" name="email" required autofocus>
                <i class="ti-email"></i>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <label class="d-block w-100">Enter Your Email</label>
            </div>
            <div class="md-form-group">
                <input id="password" type="password" class="md-input text-center" name="password" required>
                <i class="ti-lock"></i>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <label class="d-block w-100">Enter Your Password</label>
            </div>
            <div class="md-form-group">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label >Remember Me</label>
            </div>
            <div class="mt-0">
                <button id="form_submit" type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>
            </div>
        </form>
    </div>
</div>
@endsection
