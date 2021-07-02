@extends('layouts.app')

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('voters-user.store') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-6">
                <input id="name" type="text" class="form-control"  placeholder="Candidate Phone Number" name="name" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <br>

            <div class="form-group">
                <div class="col-md-6 ">
                    {!! Form::text('another_name',null,['class'=>'form-control','placeholder'=>"Full Name"]) !!}
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <input id="password" type="text" class="form-control" placeholder="Staff ID" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <input id="password-confirm" type="text" placeholder="Confirm Staff ID" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <a href="{{route('executiveIndex.index')}}" class="btn btn-danger">Back</a>

                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
    </form>

@endsection
