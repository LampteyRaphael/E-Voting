@extends('layouts.app')
@section('content')
    @include('includes.admin')
    <table class="table table-borderless">
        <tbody>
        <tr>
            @foreach($organisers as $user)

                <th>
                    <p><img class="thumbnail rounded-circle" height="100" width="100" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt=""></p>
                    <p>&nbsp;{{ucwords($user->name)}}</p>
                </th>
            @endforeach
        </tr>
        <tr>
            @foreach($organisers as $user)
                <td> {{App\VoltOrganiser::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr>
            <marquee style="color:blue;font-weight: bolder" >Vote Cast ={{$organisersCount}}</marquee>
            <marque style="color:blue;font-weight: bolder" >Voter Turn Out ={{number_format(($organisersCount/$allVotersCount)*100,0)}}&incare;</marque>

        </tr>
        <tr>
            @foreach($organisers as $user)
                <td class="text-info"><b><h4> {{number_format(App\VoltOrganiser::where('name',$user->name)->count()/$organisersCount*100,0)}}&incare;</h4></b></td>
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
        organizer.classList.add('active');

    </script>


@endsection