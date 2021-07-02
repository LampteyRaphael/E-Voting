@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @include('includes.alert')
                    <div class="panel-heading">Registration For Financial Secretary Position</div>

                    <div class="panel-body">
                        {!! Form::open(['method'=>'POST','action'=>'PostFinancialSeceretaryController@store','files'=>true])!!}

                        <div class="form-group ">
                            {!! Form::label('name','Name',['class'=>'control-label']) !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group ">
                            {!! Form::label('staffid','staffid',['class'=>'control-label']) !!}
                            {!! Form::text('staffid',null,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group ">
                            {!! Form::label('photo_id','Photo',['class'=>'control-label']) !!}
                            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Send',['class'=>'btn btn-primary']) !!}
                        </div>


                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
