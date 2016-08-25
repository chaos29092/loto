@extends('master')
@section('title')
    {{trans('keywords.products_title')}}
@stop
@section('description')
    {{trans('keywords.products_description')}}
@stop
@section('keywords')
    {{trans('keywords.products_keywords')}}
@stop

@section('content')
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent"></div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            @foreach($categories as $category)
                <li><a href="/products/category/{{$category->id}}">{{$category->name}}</a>
                    <ul>
                        @foreach($products->where('category_id',$category->id)->all() as $product)
                            <li><a href="/products/{{$product->id}}">{{$product->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <h1>Kejia {{trans('home.furnace')}}</h1>

        <div class="csc-default">
            <ul class="toc font-small">
                @foreach($categories as $category)
                    <li><a href="/products/category/{{$category->id}}"><img
                                    src="{{env('QINIU_DOMAIN').$category->main_pic}}?imageView2/2/w/227/h/150"><span>{{ucwords($category->name)}}</span></a>
                        <ul>
                            <li><strong>{{ucwords($category->max_temp)}}</strong></li>
                            @foreach($products->where('category_id',$category->id)->all() as $product)
                                <li><a href="/products/{{$product->id}}">{{ucwords($product->name)}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop