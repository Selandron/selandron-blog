<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Selandron - Admin') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/docs.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/docs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar-fixed-left.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet"> <!--load all styles -->

    @yield('links')

</head>
<body style="margin-right: 0px;">
    <nav class="navbar navbar-inverse navbar-fixed-left">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">Blog Selandron</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt fa-3x"></i><p>Dashboard</p></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-newspaper fa-3x"></i><p>Articles <span class="caret"></span></p></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('new-article')}}">New +</a></li>
                            <li><a href="{{route('my-articles')}}">My articles</a></li>
                            <li><a href="{{route('all-articles')}}">All articles</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('all-users')}}"><i class="fas fa-users fa-3x"></i><p>Users</p></a></li>
                    <li><a href="{{route('all-comments')}}"><i class="fas fa-comments fa-3x"></i><p>Comments</p></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row" id="top-bar">
            <div style="margin-right: 15px;">
                <a href="#"><i class="far fa-bell fa-2x"></i></a>
            </div>
            <div>
                <a href="{{route('new-article')}}"><i class="fas fa-plus fa-2x"></i></a>
            </div>
            <div class="col-2">
                <a href="#" style="margin-right: 10px">{!! auth()->user()->pseudo !!}</a>
                <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-2x"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>
</html>