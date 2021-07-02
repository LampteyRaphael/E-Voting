@extends('layouts.app')
@section('content')
    @include('includes.admin')
    <table class="table table-borderless">
                <tbody>
                <tr>
                    <td>Vote Cast ={{$chairmanVoteTurnOut}}</td>

                    <td>Voter Turn Out ={{number_format(($chairmanVoteTurnOut/$allVotersCount)*100,0)}}&incare;</td>
                    <td></td>
                </tr>
                <tr>
                    @foreach($users as $user)

                        <th><p><img class="thumbnail rounded-circle" height="100" width="100" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt=""></p>
                            <p>&nbsp;&nbsp;{{ucwords($user->name)}}</p></th>
                    @endforeach
                </tr>

        <tr>
            @foreach($users as $user)
                <td> {{\App\VoltChairman::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr>
            <marquee style="color:blue;font-weight: bolder" >Vote Cast ={{$chairmanVoteTurnOut}}</marquee>

            <marque style="color:blue;font-weight: bolder" >Voter Turn Out ={{number_format(($chairmanVoteTurnOut/$allVotersCount)*100,0)}}&incare;</marque>

        </tr>

        <tr>
            @foreach($users as $user)
                <td class="text-info"><b><h4>{{number_format(App\VoltChairman::where('name',$user->name)->count()/$chairmanVoteTurnOut*100,0)}} &incare;</h4></b></td>
            @endforeach
        </tr>
         </tbody>

            </table>
@endsection