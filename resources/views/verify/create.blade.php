{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Login</div>--}}

{{--<div class="panel-body">--}}
{{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<label for="password" class="col-md-4 control-label">Password</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<div class="checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-8 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--Login--}}
{{--</button>--}}

{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--Forgot Your Password?--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Login</div>--}}

{{--<div class="panel-body">--}}
{{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<label for="password" class="col-md-4 control-label">Password</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<div class="checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-8 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--Login--}}
{{--</button>--}}

{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--Forgot Your Password?--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}





        <!Doctype html>
<head>
    <title>Log In</title>
</head>
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
        color: #4CAF50;
        text-decoration: none;
    }
    .form .register-form {
        display: none;
    }
    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }
    .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
    }
    .container .info {
        margin: 50px auto;
        text-align: center;
    }
    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }
    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }
    .container .info span a {
        color: #000000;
        text-decoration: none;
    }
    .container .info span .fa {
        color: #EF3B3A;
    }
    body {
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>
<body  background="{{ asset('photos/background.png') }}">

{{--@if($post)--}}
<div class="widget bg-white">
    <h1 style="font-family: initial;text-align: center;font-size: 30px;padding-top: 8%;color:darkblue;">Voters Verification</h1>

    <h1 style="font-family: initial;text-align: center;font-size: 20px;color:darkblue;">{{"Your Verify Code is " . $post}}
        {!! Form::open(['method'=>'PUT','action'=>['PostVerifyController@update',$post],'files'=>true])!!}

        {!! Form::hidden('hiden',1,['class'=>'form-control']) !!}


        <button type="submit">destroy</button>

        {!! Form::close() !!}
    </h1>



    <h1 style="font-family: initial;text-align: center;font-size: 20px;color:darkblue;">
        @if(Session::has('success1'))

        @endif
        {{Session::get('success1')}}
    </h1>

</div>

<div class="login-page" style="padding-top: 0%;">
<div class="form">
@guest
@else
<a href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Back
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>

@endguest


{{--{!! Form::open(['method'=>'POST','action'=>'PostVerifyController@store','files'=>true])!!}--}}
<form class="login-form form-group{{ $errors->has('verify_code') ? ' has-error' : '' }}" method="POST" action="{{url('/verify')}}">
{{ csrf_field() }}
<input name="verify_code" type="hidden" placeholder="Enter Verification Code" value="{{rand(20000,70000)}}" />
@if ($errors->has('verify_code'))
<span class="help-block">
<strong>{{ $errors->first('verify_code') }}</strong>
</span>
@endif

<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
<input name="user_id" type="hidden" value="{{Auth::user()->id}}" placeholder="Staff ID"/>
@if ($errors->has('user_id'))
<span class="help-block">
<strong>{{ $errors->first('user_id') }}</strong>
</span>
@endif
</div>
<button type="submit">Verify</button>
<!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
</form>
{!! Form::close() !!}
</div>
</div>

<script type="text/javascript">
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
</body>
</html>