@extends('master')
@section('title')
    {{$product_this->title}}
@stop
@section('description')
    {{$product_this->description}}
@stop
@section('keywords')
    {{$product_this->keywords}}
@stop

@section('breadcrumbs')
    <li><a href="/products/category/{{$category_this->id}}">{{$category_this['name']}}</a></li>
    <li><a href="">{{$product_this['name']}}</a></li>
    @stop

    @section('content')
            <!-- Full-Width Area -->
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                @foreach($categories as $category)
                    <li @if($category == $category_this)class="active"@endif><a
                                href="/products/category/{{$category->id}}">{{ucwords($category->name)}}</a>
                        @if($category == $category_this)
                            <ul>
                                @foreach($products as $product)
                                    <li @if($product['id'] == $product_this['id'])class="active"@endif><a
                                                href="/products/{{$product->id}}">{{ucwords($product->name)}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <div class="csc-default"><!-- pi2 - web-2015-product_details.tpl -->


                <h1 class="first">{{ucwords($product_this->name)}}</h1>

                <ul class="tabs">
                    <li class="current"><a href="/products/{{$product_this->id}}">{{trans('home.features_options')}}</a></li>
                    <li><a href="/products/{{$product_this->id}}/models">{{trans('home.technical_details')}}</a>
                    </li>
                </ul>

                <div class="product_details grid-parent tab-content">
                    <div class="grid-parent grid-66 tablet-grid-66 mobile-grid-100">
                        <div class="grid-50 tablet-grid-100 mobile-grid-100 grid-parent">
                            <div class="buttons">
                                <a href="/contact-service"
                                   class="button short contact">{{trans('home.contact_us')}}</a>
                            </div>

                        </div>
                    </div>

                    <div class="side">
                        <div class="mediaContainer">
                            <div class="media">
                                <a class="zoom image" rel="product_images"
                                   data-id="products-{{$product_this->id}}" title="{{$product_this->name}}"
                                   href="{{env('QINIU_DOMAIN').$product_this->mainpic}}"><img
                                            src="{{env('QINIU_DOMAIN').$product_this->mainpic}}?imageView2/0/w/220"></a>

                                <div class="zoomIcon"></div>
                            </div>
                            <div class="thumbnails image">
                                <img data-id="products-{{$product_this->id}}"
                                     src="{{env('QINIU_DOMAIN').$product_this->mainpic}}?imageView2/0/w/60">
                            </div>
                            <div class="thumbnails video">

                            </div>
                        </div>
                    </div>
                    <p><b>{!! $product_this->profile !!} <br><br></b>
                        {!! $product_this->main !!}
                    </p>

                    <h2>{{trans('home.standard_features')}}</h2>
                    <ul id="advantages">
                        {!! $product_this->standard !!}
                    </ul>

                    <h2>{{trans('home.accessories')}} (<i>{{trans('home.accessories_1')}}</i>)</h2>
                    <ul id="options" class="list bidspecs">
                        {!! $product_this->options !!}
                    </ul>

                    <p><small>{{trans('home.modifications')}}<br> {{trans('home.have_question')}}</small>
                        <a href="mailto:info@furnace-tech.com">info@furnace-tech.com</a></p>

                </div>
                <div class="tab-loading"></div></div>
        </div>
    </div>
@stop

