@extends('master')
@section('title')
    {{trans('keywords.miscellaneous_title')}}
@stop
@section('description')
    {{trans('keywords.miscellaneous_description')}}
@stop
@section('keywords')
    {{trans('keywords.miscellaneous_keywords')}}
@stop

@section('content')
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                <li><a href="/downloads/operating">{{trans('home.operating_manuals')}}</a></li>
                <li><a href="/downloads/brochures">{{trans('home.brochures')}}</a></li>
                <li class="current"><a href="/downloads/miscellaneous">{{trans('home.miscellaneous')}}</a></li>
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <div class="csc-default">
                <div class="banner">
                    <div class="slideshow" data-speed="1600" data-interval="8000">
                        <div class="item"><img src="{{env('QINIU_DOMAIN')}}slider-downloads-manuals.jpg">

                            <div class="overlay textright"><span class="headline"></span><span class="subline"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1>{{trans('home.miscellaneous')}}</h1>

            <div class="csc-default">
                <div class="foldBox">
                    <div class="foldBoxContent">
                        <ul class="downloads default">
                            <li>
                                <div class="thumbnail">
                                    <img
                                            src="{{env('QINIU_DOMAIN')}}down_thum.jpg" width="57" height="80" border="0"
                                            alt="">
                                </div>
                                <div class="information">
                                    <h2>Kejia Furnace CE</h2>


                                    <div class="selector">
                                        <ul>
                                            <li class="label"><a href="#">{{trans('home.please_choose')}}
                                                    ...</a></li>
                                            <li>
                                                <a href="{{env('QINIU_DOMAIN')}}kejia-CE.jpg?attname="
                                                   target="_blank" onclick="trackPageview('../../downloads.html');">[jpg]
                                                    English</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop