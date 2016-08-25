@extends('master')
@section('title')
{{trans('keywords.brochures_title')}}
@stop
@section('description')
{{trans('keywords.brochures_description')}}
@stop
@section('keywords')
{{trans('keywords.brochures_keywords')}}
@stop

@section('content')
        <!-- Full-Width Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            <li><a href="/downloads/operating">{{trans('home.operating_manuals')}}</a></li>
            <li class="current"><a href="/downloads/brochures">{{trans('home.brochures')}}</a></li>
            <li><a href="/downloads/miscellaneous">{{trans('home.miscellaneous')}}</a></li>
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <div class="csc-default">
            <div class="banner">
                <div class="slideshow" data-speed="1600" data-interval="8000">
                    <div class="item"><img
                                src="{{env('QINIU_DOMAIN')}}slider-downloads-manuals.jpg">

                        <div class="overlay textright"><span class="headline"></span><span class="subline"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>{{trans('home.brochures')}}</h1>

        <div class="csc-default"></div>
        <div class="csc-default">


            <ul class="downloads default">
                <li>
                    <div class="thumbnail">
                        <img
                                src="{{env('QINIU_DOMAIN')}}down_thum.jpg" width="57" height="80" border="0" alt="">
                    </div>
                    {{--<div class="information">--}}
                        {{--<h2>Laboratory/standard ovens & furnaces up to 1800°C</h2>--}}


                        {{--<div class="selector">--}}
                            {{--<ul>--}}
                                {{--<li class="label"><a href="index.html#">{{trans('home.please_choose')}}...</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="../../dltmp/www/53e4b581-ac1c-4a18-a982-636500000000-df492febc5ee/brochure_catalogue_general_en.pdf?file_id=53e4b581-ac1c-4a18-a982-636500000000"--}}
                                       {{--target="_blank" onclick="trackPageview('../../downloads.html');">[pdf]--}}
                                        {{--English (10 MB)</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="../../dltmp/www/551adbef-2668-4ee2-ac7f-155c00000000-acf8a4416bc5/brochure_catalogue_general_de.pdf?file_id=551adbef-2668-4ee2-ac7f-155c00000000"--}}
                                       {{--target="_blank" onclick="trackPageview('../../downloads.html');">[pdf] German--}}
                                        {{--(11 MB)</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </li>
            </ul>
        </div>
    </div>

</div>

@stop