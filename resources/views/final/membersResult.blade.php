@extends('layouts.app')

@section('content')
    @include('includes.admin')
    <table class="table table-borderless">
        <tbody>
        <tr>
            @foreach($member as $user)

                <th>
                    <p><img class="thumbnail rounded-circle" height="100" width="100" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt=""></p>
                    <p>{{ucwords($user->name)}}</p>
                </th>
            @endforeach
        </tr>
        <tr>
            @foreach($member as $user)
                <td> {{\App\Member::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr >
            <marquee style="color:blue;font-weight: bolder" >Vote Cast ={{$memberCount}}</marquee>
            <marque style="color:blue;font-weight: bolder" >Voter Turn Out ={{number_format(($memberCount/$allVotersCount)*100,0)}}&incare;</marque>
        </tr>
        <tr>
            @foreach($member as $user)
                <td class="text-info"><b><h4>{{number_format(App\Member::where('name',$user->name)->count()/$memberCount*100,0)}}&incare;</h4></b></td>
            @endforeach
        </tr>
        </tbody>
    </table>
    <script>
        var secretary=document.getElementById('secretary');
        secretary.classList.remove('active');

        var chairman=document.getElementById('chairman');
        chairman.classList.remove('active');

        var organizer=document.getElementById('organizer');
        organizer.classList.remove('active');

        var finance=document.getElementById('finance');
        finance.classList.remove('active');

        var member=document.getElementById('member');
        member.classList.add('active');

    </script>
@endsection