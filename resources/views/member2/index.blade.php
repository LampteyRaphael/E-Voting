@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading bold">Chairmanship Position</div>
                    <div class="panel-body">

                        @if($users)
                            {!! Form::open(['method'=>'POST','action'=>'PostVoltForChairmanController@store','files'=>true])!!}

                            <table class="table" style="border: hidden">

                                @foreach($users as $user)
                                    <tr>
                                        <th>{{$user->name}}</th>
                                        <th><img class="img-circle" height="50" width="50" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt=""></th>
                                        <th>
                                            <div class="form-group">
                                                {!! Form::hidden('user_id',Auth::user()->id,['class'=>'form-control'])!!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::radio('name',$user->name,['class'=>'form-control']) !!}
                                            </div>
                                        </th>
                                    </tr>
                                @endforeach
                            </table>


                            <div class="">
                                {!! Form::submit('Send',['class'=>'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection