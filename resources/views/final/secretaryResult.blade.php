@extends('layouts.app')
@section('content')
    @include('includes.admin')
    <table class="table table-borderless">
        <tbody>
        <tr >
            <td>Vote Cast ={{$secretaryCount}}</td>

            <td>Voter Turn Out ={{number_format(($secretaryCount/$allVotersCount)*100,0)}}&incare;</td>
        </tr>
        <tr>
            @foreach($secretary as $user)

                <th><p><img class="thumbnail rounded-circle" height="100" width="100" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt=""></p>
                    <p>&nbsp;&nbsp;{{ucwords($user->name)}}</p>
                </th>
            @endforeach
        </tr>
        <tr>
            @foreach($secretary as $user)
                <td> {{\App\PostSecretary::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr >
            <marquee style="color:blue;font-weight: bolder" >Vote Cast ={{$secretaryCount}}</marquee>

            <marque style="color:blue;font-weight: bolder" >Voter Turn Out ={{number_format(($secretaryCount/$allVotersCount)*100,0)}}&incare;</marque>

        </tr>
        <tr>
            @foreach($secretary as $user)
                <td class="text-info"><b><h4>{{number_format(App\PostSecretary::where('name',$user->name)->count()/$secretaryCount*100,0)}}&incare;</h4></b></td>
            @endforeach
        </tr>
        </tbody>
    </table>

    <script>
        var secretary=document.getElementById('secretary');
        secretary.classList.add('active');

        var chairman=document.getElementById('chairman');
        chairman.classList.remove('active');
    </script>

@endsection