@extends('master')
@section('title')
    Request Success!
@stop
@section('description')
    We are very glad to receive your message, and would reply as soon as possible.
@stop
@section('keywords')
    Lab Furnace
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
            <h1>{{trans('home.request_success')}}!</h1>

            <div class="csc-default" style="margin-bottom:20px;">
                <div><b>{{trans('home.submit_1')}}</b>
                    <br><br>
                    {{trans('home.submit_2')}}
                    <br>
                    {{trans('home.submit_3')}}

                </div>
            </div>
            <div class="csc-default">
                <div><b>{{trans('home.submit_4')}}</b>.
                </div>
            </div>
        </div>
    </div>
@stop