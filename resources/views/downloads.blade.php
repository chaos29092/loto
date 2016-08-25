@extends('master')
@section('title')
{{trans('keywords.downloads_title')}}
@stop
@section('description')
{{trans('keywords.downloads_description')}}
@stop
@section('keywords')
{{trans('keywords.downloads_keywords')}}
@stop

@section('content')
        <!-- Full-Width Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


</div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            <li><a href="/downloads/operating">{{trans('home.operating_manuals')}}</a></li>
            <li><a href="/downloads/brochures">{{trans('home.brochures')}}</a></li>
            <li><a href="/downloads/miscellaneous">{{trans('home.miscellaneous')}}</a></li>
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <h1>{{trans('home.downloads')}}</h1>

        <div class="csc-default" style="margin-bottom:15px;">
            <div>{{trans('home.choose_below')}}</div>
        </div>
        <div class="csc-default">
            <ul class="toc font-small">

                <li><a href="/downloads/operating"><img
                                src="/images/downloads-manuals.jpg"><span>{{trans('home.operating_manuals')}}</span></a>
                </li>
                <li><a href="/downloads/brochures"><img
                                src="/images/downloads-catalogues.jpg"><span>{{trans('home.brochures')}}</span></a>
                </li>
                <li><a href="/downloads/miscellaneous"><img
                                src="/images/downloads-misc.jpg"><span>{{trans('home.miscellaneous')}}</span></a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop