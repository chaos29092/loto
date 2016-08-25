@extends('master')
@section('title')
    404
@stop
@section('description')
    {{trans('home.404')}}
@stop
@section('keywords')
    {{trans('keywords.index_keywords')}}
@stop

    @section('content')

            <!-- Full-Width Area -->
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


    </div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                <li></li>
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <h1>{{trans('home.404')}}</h1>

            <div class="csc-default" style="margin-bottom:20px;">
                <div><b>{{trans('home.not_exist')}}</b>
                    <br><br>
                    <a href="/">{{trans('home.return_home')}}</a>
                </div>
            </div>
        </div>
    </div>
@stop