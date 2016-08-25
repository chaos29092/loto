@extends('master')
@section('title')
{{trans('keywords.company_title')}}
@stop
@section('description')
{{trans('keywords.company_description')}}
@stop
@section('keywords')
{{trans('keywords.company_keywords')}}
@stop

@section('content')

        <!-- Full-Width Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


</div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            <li><a href="company">{{trans('home.company_history')}}</a></li>
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <div class="csc-default">
            <div class="banner">
                <div class="slideshow" data-speed="1600" data-interval="8000">
                    <div class="item"><img src="{{env('QINIU_DOMAIN')}}slider-company.jpg" alt="{{trans('home.company_history')}}">

                        <div class="overlay textright"><span class="headline"></span><span class="subline"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>{{trans('home.company_history')}}</h1>

        <div class="csc-default" style="margin-bottom:20px;">
            <div><b>{{trans('home.company_content_1')}}</b>
                <br><br>
                {{trans('home.company_content_2')}}
                <br><br>
                {{trans('home.company_content_3')}}
                <br><br>
                {{trans('home.company_content_4')}}
                <br><br>
            </div>
        </div>
        <div class="csc-default">
            <div><b>{{trans('home.view_and_down')}}</b> <b><a
                            href="/downloads/miscellaneous" class="internal-link"
                            alt="Opens internal link in current window">{{trans('home.please_click_here')}}</a></b>.
            </div>
        </div>
    </div>
</div>
@stop