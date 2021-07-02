@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Registration For Secretary Position</h4>
       {!! Form::open(['method'=>'POST','action'=>'CreateSecretaryController@index','files'=>true])!!}
   <div class="row">
        <div class="col-md-4">
            {!! Form::label('name','Name',['class'=>'control-label']) !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="col-md-4">
            {!! Form::label('staffid','staffid',['class'=>'control-label']) !!}
            {!! Form::text('staffid',null,['class'=>'form-control']) !!}
        </div>

        <div class="col-md-4">
            {!! Form::label('photo_id','Photo',['class'=>'control-label']) !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
   </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <a href="{{route('executiveIndex.index')}}" class="col-sm-offset-10">Back</a>
        </div>
        <div class="col-md-6">
            {!! Form::submit('Send',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
            </div>
@endsection
