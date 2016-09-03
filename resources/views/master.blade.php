<!DOCTYPE html>
<html lang="{{\Config::get('app.locale')}}" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">


    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" media="screen">
    <script async src="{{asset('js/kejia.js')}}" type="text/javascript"></script>

    <title>@yield('title') - LOTO</title>
    <meta name="keywords"
          content="@yield('keywords')">
    <meta name="description"
          content="@yield('description')">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
</head>

<body>
<div class="frame grid-container grid-parent">
    <!-- Top Area -->
    <div class="top-area sidebar-column grid-parent grid-25 tablet-grid-25 mobile-grid-80">
        <a class="logo" href="/"><span>LOTO</span></a>
    </div>
    <div class="top-area grid-parent mobile-grid-20 hide-on-tablet hide-on-desktop">
        <a class="mobile-nav-button" href="/#mobile-nav">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <div class="top-area main-column with-sidebar grid-parent grid-75 tablet-grid-75">
        <div class="header grid-parent grid-100 tablet-grid-100 hide-on-mobile">
            <div class="widgets">
                {{--<form class="search" method="get" action="http://www.carbolite-gero.com/search/">--}}
                {{--<input type="hidden" name="nocache" value="1">--}}
                {{--<input type="text" class="search-input" name="search">--}}
                {{--<button type="submit" class="search-button">Search</button>--}}
                {{--</form>--}}
                <div class="language">
                    <ul>
                        <li class="label"><span>English</span></li>
                        <li class="current"><a href="/">English</a></li>
                        <li><a href="http://es.furnace-tech.com">Spain</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav">
                <ul>
                    <li @if(url()->current()=='http://'.$_SERVER['SERVER_NAME'])class="current"@endif><a
                                href="/">{{trans('home.home')}}</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/products'))class="current"@endif><a
                                href="/products">{{trans('home.products')}}</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/contact-service'))class="current"@endif><a
                                href="/contact-service">{{trans('home.contact_service')}}</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/faq'))class="current"@endif><a
                                href="/faq">{{trans('home.faq_tips')}}</a></li>
                    <li @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/company'))class="current"@endif><a
                                href="/company">{{trans('home.company')}}</a></li>
                </ul>
            </nav>

        </div>
        <nav class="breadcrumbs grid-100 tablet-grid-100">
            <ul>
                <li><a href="/">{{trans('home.home')}}</a></li>
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/products'))
                    <li><a href="/products">{{trans('home.products')}}</a></li>
                    @yield('breadcrumbs')
                @endif
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/contact-service'))
                    <li><a href="/contact-service">{{trans('home.contact_service')}}</a></li>@endif
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/faq'))
                    <li><a href="/faq">{{trans('home.faq_tips')}}</a></li>@endif
                @if(strpos(url()->current(),$_SERVER['SERVER_NAME'].'/company'))
                    <li><a href="/company">{{trans('home.company')}}</a></li>@endif
            </ul>
        </nav>
    </div>


    @yield('content')
            <!-- Mobile Navigation -->
    <div id="mobile-nav" class="mobile-nav grid-parent mobile-grid-100 hide-on-tablet hide-on-desktop"></div>

    <!-- Footer Area -->
    <div class="footer-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent clear">
        <div class="grid-15 tablet-grid-15 hide-on-mobile">
            <ul>
                <li><a href="/contact-service">{{trans('home.contact_service')}}</a></li>
            </ul>
        </div>
        <div class="grid-15 tablet-grid-15 hide-on-mobile">
            <ul>
                <li><a href="/faq">{{trans('home.faq_tips')}}</a></li>
                <li><a href="/faq/tips">{{trans('home.tips')}}</a></li>
                <li><a href="/company">{{trans('home.company')}}</a></li>
            </ul>
        </div>
        <div class="grid-15 tablet-grid-15 mobile-grid-100">
            <ul>
                <li><strong><a href="/products">{{trans('home.products')}}</a></strong></li>
                <li>&nbsp;</li>
                <li><a href="/products">{{trans('home.standard_products')}}</a></li>
                <li><a href="/contact-service">{{trans('home.customize')}}</a></li>
            </ul>
        </div>
        <div class="part-of-vs prefix-5 grid-25 tablet-grid-25 mobile-grid-100">
            <img alt="footer" src="{{asset('img/footer-vs.png')}}">
        </div>
    </div>

    <!-- Copyright Area -->
    <div class="copyright-area grid-100">
        &copy; 2016 LOTO Co., Ltd.
    </div>

</div>

</body>
</html>