<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style type="text/css">
        .container1{
            width:100%;
        }
        @media screen and (max-width: 600px) {
            .container1{
                font-size: 8px;
            }
        }
        .progressbar{
            counter-reset: step;
        }
        .progressbar li{
            list-style-type: none;
            float: left;
            width:19.25%;
            position: relative;
            text-align: center;
        }
        .progressbar li:before{
            content: counter(step);
            counter-increment: step;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border: 1px solid #ddd;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            background-color: white;
        }
        .progressbar li:after{
            content: '';
            position: absolute;
            width: 100%;
            height: 1px;
            background-color: #ddd;
            top: 15px;
            left: -50%;
            z-index: -1;
        }
        .progressbar li:first-child:after{
            content: none;
        }
        .progressbar li.active{
            color: #e9eee9;
        }
        .progressbar li.active:before{
            background-color: #0c820c;
            color: white;
        }
        .progressbar li.active+li:after{
            background-color:#0c820c;
            font-weight: bold;
        }
        .progressbar li.active {
            color: #0c820c;
            font-weight: bold;
        }
        .bg-dark {
            background-color: #28304e!important;
            height:200px;
        }
        .bg-red{
            margin-top: -50px;
        }
        .badge-circle{
            border-radius:200%;
            padding: 10px;
            background-color: #d90000;
            color: #ffffff;
        }
        .title{
          color:   #d90000;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color:  #d90000;
        }
    </style>
</head>
<body>
        <nav class="navbar sticky-top  navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><span class="text-danger text-uppercase title">TAC-HQ</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                {{ strtoupper(Auth::user()->another_name??'') }}
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item"><a href="{{ route('login') }}" class="navbar-link">Login</a></li>
                    @else
                        <li class="nav-item">
                            <a class="navbar-link"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                              <span class="badge badge-danger">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <div class="container-fluid bg-dark mb10">
            <div class="row float-right">
                <div class="col">
                    <div class="card m-t-10 bg-warning">
                        <div class="card-body ">
                            <div class="row mt-0">
                                <h4 class="m-0">2021 - Welfare Election</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-red">
            <div class="row pull-up">
                <div class="col m-b-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center p-t-30 p-b-20">
                                <div class="text-overline text-muted opacity-75">
                                    @include('sweetalert::alert')
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
