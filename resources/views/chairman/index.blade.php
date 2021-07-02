@extends('layouts.app')

@section('content')
            @include('includes.progress')
            @if($users)
                {!! Form::open(['method'=>'POST','action'=>'PostVoltForChairmanController@store','files'=>true])!!}
                <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">Nominees</th>
                    <th scope="col">Image</th>
                    <th scope="col">Tick</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th class="align-middle">{{ucwords($user->name)}}</th>
                        <td><img class="img-thumbnail rounded-circle" height="150" width="150" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt=""></td>
                        <th>
                            <div class="form-group">
                                {!! Form::hidden('user_id',Auth::user()->id,['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group align-middle">
                                {!! Form::radio('name',$user->name,null,['class'=>'form-control']) !!}
                            </div>
                        </th>
                    </tr>
                @endforeach
                <tr>
                    <td  colspan="3">
                        {!! Form::submit('Vote',['class'=>'btn btn-primary float-right','onclick'=>"return confirm('Are You Sure You want to vote for the chairmanship position?')"]) !!}

                    </td>
                </tr>
                </tbody>
            </table>
            @endif
            {!! Form::close() !!}
@endsection