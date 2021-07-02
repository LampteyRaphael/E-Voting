@extends('layouts.app2')

@section('content')

    <div class="row align-items-center m-h-100">
        <div class="mx-auto col-md-8 pt5 text-center m-auto">
            <p>
               <h5>WELFARE-ELECTION (HQ)</h5>
            </p>
            <p>
                <h7 class="text-danger"><b>Use Your Staff ID and  Telephone Number To Login</b></h7>
            </p>
        </div>
    </div>
    <div class="login-page" style="padding-top: 0%;  background-color: lightblue" >
        <div class="form" style="background-color: lightblue">
            <form class="login-form form-group{{ $errors->has('name') ? ' has-error' : '' }}" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input name="password" type="text" placeholder="Enter Your Staff ID"/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <input name="name" type="text" placeholder="Enter Your Phone Number"/>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <button type="submit" id="btn">login</button>
            </form>
            <p style="color:blue">Help Line:</p><p style="color:blue;">
                0249577997,&nbsp; 0271499589</p>
            <p style="color:green">Thank You</p>
        </div>
    </div>

@endsection