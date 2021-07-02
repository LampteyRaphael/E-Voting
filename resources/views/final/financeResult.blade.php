@extends('layouts.app')

@section('content')
    @include('includes.admin')
    <table class="table table-borderless">
        <tbody>
        <tr>
            <td>Vote Cast ={{$financesecretaryCount}}&nbsp;&nbsp;&nbsp;
                Voter Turn Out ={{number_format(($financesecretaryCount/$allVotersCount)*100,0)}}&incare;
            </td>
        </tr>
        <tr>
            @foreach($financesecretary as $user)
                <th>
                    <p><img class="thumbnail rounded-circle" height="100" width="100" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt="">
                    </p>
                    <p>{{ucwords($user->name)}}</p>
                </th>
            @endforeach
        </tr>
        <tr>
            @foreach($financesecretary as $user)
                <td> {{\App\VoltFinance::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr>
            <marquee style="color:blue;font-weight: bolder" >Vote Cast ={{$financesecretaryCount}}</marquee>
            <marque style="color:blue;font-weight: bolder" >Voter Turn Out ={{number_format(($financesecretaryCount/$allVotersCount)*100,0)}}&incare;</marque>
        </tr>

        <tr>
            @foreach($financesecretary as $user)
                <td class="text-info"><b><h4>{{number_format(App\VoltFinance::where('name',$user->name)->count()/$financesecretaryCount*100,0)}}&incare;</h4></b></td>
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
        finance.classList.add('active');

    </script>
@endsection