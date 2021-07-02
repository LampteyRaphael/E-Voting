@extends('layouts.app')

@section('content')
    <div class="container">
 <div class="row">
         <div class="col-md-2">
             <ul class="nav">

                 <li>
                     <a href="{{route('chairman.create')}}">Register Chairman</a>
                 </li>

                 <li>
                     <a href="{{route('secretary.create')}}">Register Secretary</a>
                 </li>
                 <li>
                     <a href="{{route('financial.create')}}">Register Financial Secretary</a>
                 </li>
                 <li>
                     <a href="{{route('organizer.create')}}">Register Organizer</a>
                 </li>
                 <li>
                     <a href="{{route('member1.create')}}">Register Member 1</a>
                 </li>

                 <li>
                     <a href="{{route('votersRegister.index')}}">Registered Voters</a>
                 </li>
                 <li>
                     <a href="{{route('pdf.index')}}">Final PDF</a>
                 </li>
                 <li>
                     <a href="{{route('final.index')}}">Voting Outcomes</a>
                 </li>
                 <li>
                     <a href="{{route('votersRegister.index')}}">Voting List</a>
                 </li>

             </ul>
         </div>
            <div class="col-md-10">

                @include('includes.alert')

                <div class="panel panel-default" >

                    <div class="panel-heading bold" >All Registered Voters </div>
                    <div class="panel-body">
                        <table class="table table-bordered">


                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>Names</th>
                                    <th>Verification Codes &nbsp;<a href="{{route('votersRegisterPDF.index')}}">PDF</a></th>
                                </tr>
                             </thead>
                            <tbody>
                            <tr><span class="color:blue;">TOTAL REGISTERED VOTERS :{{$allVotersCount}}</span></tr>
                            
                                @foreach($allVoters as $user)
                                   <tr>
                                       <td>{{$user->id}}</td>
                                    <td>{{($user->another_name)}}</td>
                                    <td>{{($user->name)}}</td>
                                    </tr>
                                @endforeach


                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection