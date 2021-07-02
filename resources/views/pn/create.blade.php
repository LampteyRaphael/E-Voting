@extends('layouts.app2')

@section('content')

    <div class="row align-items-center m-h-100">
        <div class="mx-auto col-md-8 pt5 text-center m-auto">
            <h6 class="text-shadow text-danger bolder">Enter Your Verification Pin Code</h6>
        </div>
    </div>
    <div class="login-page" style="padding-top: 0%;  background-color: lightblue" >
        <div class="form" style="background-color: lightblue">
            <form class="login-form form-group{{ $errors->has('pin_verify') ? ' has-error' : '' }}" method="POST" action="{{ url('/pin-code') }}">
                {{ csrf_field() }}
                <input name="pin_verify" type="text" placeholder="Enter Pin Code"/>
                @if ($errors->has('pin_verify'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('pin_verify') }}</strong>
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
