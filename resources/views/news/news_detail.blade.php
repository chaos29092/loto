@extends('master')
@section('title')
{{$new->title}}
@stop
@section('description')
{{$new->profile}}
@stop
@section('keywords')
{{$new->profile}}
@stop

@section('content')
        <!-- Full-Width Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            <li><a href="/news">{{trans('home.news')}}</a></li>
            <li><a href="/news/cases">{{trans('home.custom_cases')}}</a></li>
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <div class="csc-default">
            <div class="news-detail">

                <h1 class="first">{{ucwords($new->title)}}</h1>

                <p><strong>{!! $new->profile !!}</strong></p>

                <div class="image"><img src="{{env('QINIU_DOMAIN').$new->image}}?imageView2/2/w/200/h/250"
                                        alt="{{$new->title}}"></div>
                <p>{!! $new->body !!}</p>


                <p class="back"><a @if($new->tag=='news')
                                   href="/news"
                            @else
                            href="/news/cases"
                            @endif>{{trans('home.back_to_overview')}}</a></p>
            </div>
        </div>
    </div>
</div>
@stop