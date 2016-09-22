@extends('master')
@section('title')
    @if($news->first()->tag =='news'){{trans('keywords.news_title')}}@else {{trans('keywords.cases_title')}} @endif
@stop
@section('description')
    @if($news->first()->tag =='news'){{trans('keywords.news_description')}}@else {{trans('keywords.cases_description')}} @endif
@stop

@section('content')
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>
    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                <li><a href="/faq">{{trans('home.faq')}}</a></li>
                <li><a href="/faq/tips">{{trans('home.tips')}}</a></li>
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>

    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <h1>@if($news->first()->tag =='news') {{trans('home.faq')}} @else {{trans('home.tips')}} @endif</h1>

            <div class="csc-default">
                <ul class="news-list">
                    @foreach($news as $new)
                        <li>
                            <div class="image">
                                <img src="/{{$new['image']}}"
                                     alt="{{$new->title}}" width="180">
                            </div>
                            <div class="information">
                                <h2><a href="/faq/{{$new->id}}">{{ucwords($new->title)}}</a></h2>

                                <p>{{$new->profile}}</p>

                                <p><a href="/faq/{{$new->id}}" target="_top">[{{trans('home.more')}}...]</a></p>
                            </div>
                        </li>
                    @endforeach
                    {{$news->render()}}
                </ul>
            </div>
        </div>
    </div>
@stop