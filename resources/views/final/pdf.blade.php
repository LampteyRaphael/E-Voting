<!doctype html>
<html>
<head>
    <title>The Apostolic Church Welfare Electronic system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>
<style>

    h2{
        position:center;
        margin-left: 120px;
        font-style: inherit;
        color:darkblue;
    }

    h3{
        position:center;
        margin-left: 250px;
        font-style: inherit;
        color: red;
    }
    td{
        font-size: 15px;
    }

</style>
<body>
<div class="container">
<div class="row">
    <table class="table">
        <tbody>
        <tr><td colspan="3"> CHAIRMANSHIP</td></tr>
        <tr>
            <td>Vote Cast ={{$chairmanVoteTurnOut}}</td>

            <td>Voter Turn Out ={{number_format(($chairmanVoteTurnOut/$allVotersCount)*100,0)}}%</td>
          <td></td>
        </tr>
        <tr>
            @foreach($users as $user)

                <th><p>&nbsp;&nbsp;{{ucwords($user->name)}}</p></th>
            @endforeach
        </tr>
        <tr>
            @foreach($users as $user)
                <td class="text-center"> {{\App\VoltChairman::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach($users as $user)
                <td>{{number_format(App\VoltChairman::where('name',$user->name)->count()/$chairmanVoteTurnOut*100,0)}}%</td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>

        {{--Chairmanship--}}

<div class="row">

    <table class="table">
        <thead>
        <tr><td colspan="3">SECRETARY</td></tr>
        <tr>
            <td>Vote Cast ={{$secretaryCount}}</td>

            <td>Voter Turn Out ={{number_format(($secretaryCount/$allVotersCount)*100,0)}}%</td>

        </tr>
        <tr>
            @foreach($secretary as $user)

                <th><p>&nbsp;&nbsp;{{ucwords($user->name)}}</p></th>
            @endforeach
        </tr>

        <tr>
            @foreach($secretary as $user)
                <td class="text-center"> {{App\PostSecretary::where('name',$user->name)->count()*100}}</td>
            @endforeach
        </tr>

        <tr>
            @foreach($secretary as $user)
                <td>{{number_format(App\PostSecretary::where('name',$user->name)->count()/$secretaryCount*100,0)}}%</td>
            @endforeach
        </tr>
        </thead>
    </table>
</div>
        {{--Secretary--}}
<div class="row">
<table class="table">
    <tbody>
    <tr><td colspan="3">FINANCIAL SECRETARY</td></tr>
    <tr>
        <td>Vote Cast ={{$financesecretaryCount}}</td>

        <td>Voter Turn Out ={{number_format(($financesecretaryCount/$allVotersCount)*100,0)}}%</td>
    </tr>
    <tr>
        @foreach($financesecretary as $user)
            <th><p>&nbsp;&nbsp;{{ucwords($user->name)}}</p></th>
        @endforeach
    </tr>
    <tr>
        @foreach($financesecretary as $user)
            <td class="text-center"> {{\App\VoltFinance::where('name',$user->name)->count()}}</td>
        @endforeach
    </tr>
    <tr>
        @foreach($financesecretary as $user)
            <td>{{number_format(App\VoltFinance::where('name',$user->name)->count()/$financesecretaryCount*100,0)}}%</td>
        @endforeach
    </tr>
    </tbody>
</table>
</div>

    {{--Financial Secretary--}}

<div class="row">

    <table class="table">

        <tbody>
        <tr><td colspan="3">ORGANIZER</td></tr>
        <tr>
            <td>Vote Cast ={{$organisersCount}}</td>
            <td>Voter Turn Out ={{number_format(($organisersCount/$allVotersCount)*100,0)}}%</td>
        </tr>
        <tr>
            @foreach($organisers as $user)
                <th><p>&nbsp;{{ucwords($user->name)}}</p></th>
            @endforeach
        </tr>
        <tr>
            @foreach($organisers as $user)
                <td class="text-center"> {{\App\VoltOrganiser::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach($organisers as $user)
                <td></td>{{number_format(App\VoltOrganiser::where('name',$user->name)->count()/$organisersCount*100,0)}}%</td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table">
        <tbody>
        <tr><td colspan="3">Executive Members</td></tr>
        <tr>
            @foreach($member as $user)

                <th><p>{{ucwords($user->name)}}</p></th>
            @endforeach
        </tr>
        <tr>
            @foreach($member as $user)
                <td class="text-center"> {{\App\Member::where('name',$user->name)->count()}}</td>
            @endforeach
        </tr>
        <tr>
            @foreach($member as $user)
                <td></td>{{number_format(App\Member::where('name',$user->name)->count()*100,0)}}%</td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>
</div>
</body>
</html>




