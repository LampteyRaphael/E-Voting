<!doctype html>
<html>
<head>
    <title>Welfare Electronic System</title>
</head>
<style>
    table,td{
        border: 1px solid black;
        height: auto;
        width: 100%;
        /*background: rgba(255,255,225,2);*/
    }


    body{
        /*background: url("photos/b.jpg");*/
        /*background-repeat: repeat;*/
        /*background-size:5% 5%;*/
        /*z-index: 0;*/
    }
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
                    <h2 style="margin-left: 100px"><u>Registered Welfare Members For Electronic Voting</u></h2>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Names</th>
                                {{--<th>Verification Codes</th>--}}
                            </tr>
                            </thead>

                            <tbody>
                       @if($allVoters)
                            @foreach($allVoters as $user)
                                <tr>
                                    <td>{{($user->id)}}</td>
                                    <td>{{($user->another_name)}}</td>
                                    {{--<td>{{($user->name)}}</td>--}}
                                </tr>
                            @endforeach

                       @endif
                            </tbody>
                        </table>

</body>