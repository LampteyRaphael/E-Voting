@extends('layouts.app')
<script type='text/javascript'>
    setTimeout("location.reload();",1500000);
</script>
@section('content')
    <div class="container">
        <marquee behavior="rotate" direction="down">
            <a class="badge badge-danger" href="{{route('executiveChairman.index')}}">Home</a>
            <div class="row">
                <div class="col-md-12">
                    @include('includes.alert')
                            <table class="table table-borderless">
                                <tbody>
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
                                        <td class="text-info"><b><h4>{{number_format((App\VoltChairman::where('name',$user->name)->count()/$chairmanVoteTurnOut*100),0)}} &incare;</h4></b></td>
                                    @endforeach
                                </tr>

                              </tbody>
                            </table>

            {{--Chairmanship--}}
                    <hr>

                            <table class="table table-borderless">

                                <tbody>
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
                                        <td class="text-info"><b><h4>{{number_format((App\PostSecretary::where('name',$user->name)->count()/$secretaryCount*100),0)}}&incare;</h4></b></td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>

            {{--Secretary--}}

                    <hr>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    @foreach($financesecretary as $user)

                                        <th>
                                            <p><img class="thumbnail rounded-circle" height="100" width="100" src="{{$user->photo? $user->photo->file :'http://placehold.it/400x400'}}" alt="">
                                            </p>
                                            <p>&nbsp;&nbsp;{{ucwords($user->name)}}</p>
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
                                        <td class="text-info"><b><h4>{{number_format((App\VoltFinance::where('name',$user->name)->count()/$financesecretaryCount*100),0)}}&incare;</h4></b></td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>

                    <hr>
            {{--Financial Secretary--}}

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
                                        <td> {{\App\VoltOrganiser::where('name',$user->name)->count()}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <marquee style="color:blue;font-weight: bolder" >Vote Cast ={{$organisersCount}}</marquee>
                                    <marque style="color:blue;font-weight: bolder" >Voter Turn Out ={{number_format(($organisersCount/$allVotersCount)*100,0)}}&incare;</marque>

                                </tr>
                                <tr>
                                    @foreach($organisers as $user)
                                        <td class="text-info"><b><h4> {{number_format((App\VoltOrganiser::where('name',$user->name)->count()/$organisersCount*100),0)}}&incare;</h4></b></td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>


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
                                        <td class="text-info"><b><h4>{{number_format((App\Member::where('name',$user->name)->count()/$memberCount*100),0)}}&incare;</h4></b></td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>

        </marquee>
    </div>


 

@endsection   