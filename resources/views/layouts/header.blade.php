<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agromax</title>
    <link rel="stylesheet" href="{{asset('css/fontawesome-free-5.6.3-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="main-page">
<div class="content-wrapper">
<header class="header">
    <div class="container">
        <div class="row">
            <div class="header__top  col-sm-12 clearfix">
                <div class="header__top--lang localizationTool" id="selectLanguageDropdown"></div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="header__bottom col-sm-12">
                <div class="header__logo-wr"><a href="{{ Request::root() }}"><img src="{{asset('images/logo.jpg')}}" alt="Agromax"></a>
                </div>
                <div class="header__site-nav site-nav navbar navbar-default clearfix" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="site-nav-btn navbar-toggle fa fa-bars" data-toggle="collapse"
                                data-target=".navbar-collapse">
                        </button>
                    </div>
                    <div class="header__site-nav-wrapper navbar-collapse collapse">
                        <ul @if(isset(Request::all()['lang']) && Request::all()['lang'] === 'ar_TN') class="header__site-nav site-nav__list--reverse" @else class="header__site-nav site-nav__list" @endif>
                            <li class="site-nav__item"><a @if(Route::currentRouteName() === 'index')           class="site-nav__link site-nav__link--current" @else class="site-nav__link" @endif {{--class="site-nav__link"--}} href="products">{{$newNavNames[0] ?? 'Products'}}</a></li>
                            <li class="site-nav__item"><a @if(Route::currentRouteName() === 'company')         class="site-nav__link site-nav__link--current" @else class="site-nav__link" @endif {{--class="site-nav__link"--}} href="company">{{$newNavNames[1] ?? 'Company'}}</a></li>
                            <li class="site-nav__item"><a @if(Route::currentRouteName() === 'founder')         class="site-nav__link site-nav__link--current" @else class="site-nav__link" @endif {{--class="site-nav__link"--}} href="founder">{{$newNavNames[2] ?? 'Founder'}}</a></li>
                            <li class="site-nav__item"><a @if(Route::currentRouteName() === 'exclusive')       class="site-nav__link site-nav__link--current" @else class="site-nav__link" @endif {{--class="site-nav__link"--}} href="exclusive">{{$newNavNames[3] ?? 'Make exclusive order'}}</a></li>
                            <li class="site-nav__item"><a @if(Route::currentRouteName() === 'partnership')     class="site-nav__link site-nav__link--current" @else class="site-nav__link" @endif {{--class="site-nav__link"--}} href="partnership">{{$newNavNames[4] ?? 'Partnership program'}}</a></li>
                            <li class="site-nav__item"><a @if(Route::currentRouteName() === 'charity')         class="site-nav__link site-nav__link--current" @else class="site-nav__link" @endif {{--class="site-nav__link"--}} href="charity">{{$newNavNames[5] ?? 'Charity'}}</a></li>
                            <li class="site-nav__item"><a @if(Route::currentRouteName() === 'contacts')        class="site-nav__link site-nav__link--current" @else class="site-nav__link" @endif {{--class="site-nav__link"--}} href="contacts">{{$newNavNames[6] ?? 'Contacts'}}</a></li>
                            <li class="site-nav__item site-nav__item--search">
                                <div class="site-nav__search-icon fa fa-search">
                                    <form class="site-nav__search-form">
                                        <input class="site-nav__search" type="text" placeholder="Search for...">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>