@extends('master')
@section('title')
    {{$category_this['name']}}
@stop
@section('description')
    {{$category_this['description']}}
@stop
@section('keywords')
    {{$category_this['description']}}
@stop

@section('breadcrumbs')
    <li><a href="">{{$category_this['name']}}</a></li>
    @stop

    @section('content')
            <!-- Full-Width Area -->
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                @foreach($categories as $category)
                    <li @if($category->id == $id)class="active"@endif>
                        <a href="/products/category/{{$category->id}}">{{ucwords($category->name)}}</a>
                        @if($category->id == $id)
                            <ul>
                                @foreach($products as $product)
                                    <li class=""><a href="/products/{{$product->id}}">{{ucwords($product->name)}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-$id00">
        <div class="grid-100 content">
            {{--<div class="csc-default">--}}
                {{--<div class="banner">--}}
                    {{--<div class="slideshow" data-speed="1600" data-interval="8000">--}}
                        {{--<div class="item">--}}
                            {{--<img src="{{env('QINIU_DOMAIN').$category_this->banner}}?imageView2/2/w/768/h/210"/>--}}

                            {{--<div class="overlay textright"><span class="headline"></span><span class="subline"></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <h1>{{ucwords($category_this->name)}}</h1>
            <div class="csc-default" style="margin-bottom:20px;">
                <div>{!! $category_this->description !!}</div>
            </div>

            <div class="csc-default">
                <ul class="product_group">

                    @foreach($products as $product)
                        <li>
                            <h2><a href="/products/{{$product->id}}">{{ucwords($product->name)}}</a></h2>
                            <div>
                                <a href="/products/{{$product->id}}"><img
                                            src="{{env('QINIU_DOMAIN').$product->categorypic}}?imageView2/2/w/234/h/300"
                                            alt="{{$product->name}}"></a>
                                <ul>
                                    {!! $product->categorypara !!}
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop