<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'/>

    <link rel="stylesheet" href="{{asset('font-awesome-4.2.0/css/font-awesome.css')}}" type="text/css"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/daterangepicker-bs3.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/jquery-jvectormap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/styledash.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css"/>

</head>
<body>

<div class="main">
    <header class="header">
        <div class="logo">
            <a href="{{ route('dashboard') }}" title=""><i class="fa fa-home"></i></a>
            <a href="{{ route('index') }}" title=""><i class="fa fa-paper-plane-o"></i></a>
            <a title="" class="toggle-menu"><i class="fa fa-bars"></i></a>
        </div>
        <div class="dropdown profile">
            <a title="">
                <img src="" alt=""/>???????????{{--{{$user->name}}--}}<i class="caret"></i>
            </a>
            <div class="profile drop-list">
                <ul>
                    <li><a href=""{{--{{ route('logout') }}--}} title=""><i class="fa fa-info"></i>LOGout</a></li>
                </ul>
            </div>
        </div>
    </header>