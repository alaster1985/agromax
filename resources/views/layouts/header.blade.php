<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agromax</title>
    {{--<link rel="stylesheet" href="css/fontawesome-free-5.6.3-web/css/all.css">--}}
    {{--<link rel="stylesheet" href="bootstrap/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="css/style.css">--}}
    <link rel="stylesheet" href="{{asset('css/fontawesome-free-5.6.3-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
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
                <div class="header__logo-wr"><a href="/"><img src="{{asset('images/logo.jpg')}}" alt="Agromax"></a>
                </div>
                <div class="header__site-nav site-nav navbar navbar-default clearfix" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="site-nav-btn navbar-toggle fa fa-bars" data-toggle="collapse"
                                data-target=".navbar-collapse">
                        </button>
                    </div>
                    <div class="header__site-nav-wrapper navbar-collapse collapse">
                        <ul class="header__site-nav site-nav__list">
                            <li class="site-nav__item "><a class="site-nav__link" href="/">Our company</a>
                            </li>
                            <li class="site-nav__item "><a class="site-nav__link" href="/founder">Our
                                    founder</a></li>
                            <li class="site-nav__item "><a class="site-nav__link" href="/exclusive">Make
                                    exclusive order</a></li>
                            <li class="site-nav__item "><a class="site-nav__link"
                                                           href="/confirmation">Charity</a></li>
                            <li class="site-nav__item "><a class="site-nav__link" href="/contacts">Contacts</a>
                            </li>
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