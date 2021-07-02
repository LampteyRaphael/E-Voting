@extends('layouts.app')

@section('content')
     @include('includes.progress')
     @if($users)
         {!! Form::open(['method'=>'POST','action'=>'PostSecretaryController@store','files'=>true])!!}
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
                     <th class="align-middle"><img class="img-thumbnail rounded-circle" height="150" width="150" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt=""></th>
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
                 <th colspan="3">
                     {!! Form::submit('Vote',['class'=>'btn btn-primary  float-right','onclick'=>"return confirm('Are You Sure You want to vote for the secretary position?')"]) !!}
                 </th>
             </tr>
             </tbody>
         </table>
     @endif

<script type="text/javascript">
    var secretary=document.getElementById('secretary');
        secretary.classList.add('active');
            // secretary.fontcolor( "blue" );
</script>
@endsection