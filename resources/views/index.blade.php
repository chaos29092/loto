@extends('master')
@section('title')
{{trans('keywords.index_title')}}
@stop
@section('description')
{{trans('keywords.index_description')}}
@stop
@section('keywords')
{{trans('keywords.index_keywords')}}
@stop


@section('content')
        <!-- Banner Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">
    <div class="content grid-100">
        <div class="csc-default">
            <div class="banner">
                <div class="slideshow" data-speed="1600" data-interval="5000">

                    <div class="item"><a href="/products/category/1"><img
                                    src="{{env('QINIU_DOMAIN')}}banner1.jpg">

                            <div class="overlay textright"><span class="headline">50~1700C Laboratory <br>Muffle Furnace</span><span
                                        class="subline">- Can be customized according to your needs.<br>- with amazing price.</span>
                            </div>
                        </a></div>
                    <div class="item"><a href="/products/category/2"><img
                                    src="{{env('QINIU_DOMAIN')}}banner2.jpg">

                            <div class="overlay textright"><span class="headline">50~1700C Laboratory<br>Tube Furnace</span><span
                                        class="subline">- Can be customized according to your needs.<br>- with amazing price.</span></div>
                        </a></div>
                    <div class="item"><a
                                href="/products/category/4"><img
                                    src="{{env('QINIU_DOMAIN')}}banner3.jpg">

                            <div class="overlay textright"><span class="headline">1200~1600C <br>Dental Furnace</span><span
                                        class="subline">- Mainly used for crystallization and sintering of crowns</span></div>
                        </a></div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Left Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <div class="content"><p><b>{{trans('home.kejia_furnace_ltd')}}</b><br>{{trans('home.address_1')}}
            <br>{{trans('home.address_2')}}<br>
            Tel:  +86-371-67826992<br> Fax: +86-371-67197091<br> <a href="mailto:info@furnace-tech.com" class="mail"
                                                                    alt="Opens window for sending email">info@furnace-tech.com</a></p>
        <hr>
    </div>
    <div class="content">
        <div>
            <img src="{{asset('img/home_companies-placeholder.png')}}" alt="{{trans('home.custom_designed_furnace')}}">
        </div>
    </div>
    <div class="tagcloud-container content"></div>
</div>


<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <h1>{{trans('home.index_h1')}}</h1>

        <div class="csc-default" style="margin-bottom:20px;">
            <div>{{trans('home.index_profile')}}</div>
        </div>
        <div class="csc-default">
            <ul class="toc font-small">
                @foreach($categories as $category)
                    <li><a href="/products/category/{{$category['id']}}"><img
                                    src="{{env('QINIU_DOMAIN').$category['main_pic']}}?imageView2/2/w/227/h/150"><span>{{$category['name']}}</span></a>
                        <ul>
                            <li><strong>{{$category['max_temp']}}</strong></li>

                            @foreach($products->where('category_id',$category['id'])->all() as $product)
                                <li><a href="/products/{{$product->id}}">{{$product->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>

        {{--<div class="csc-default">--}}
        {{--<ul class="news-home">--}}
        {{--<li>--}}
        {{--<a href="http://win.verder-scientific.com/future/pure-science-no-fiction/" target="_blank"> <img--}}
        {{--src="images/news-competition.jpg" width="223" height="131" alt="">--}}
        {{--</a> <span><a href="http://win.verder-scientific.com/future/pure-science-no-fiction/"--}}
        {{--target="_blank">Join our competition to win an electric BMW I3!</a></span>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="products/application-specific-furnaces/metal-and-ceramic-injection-moulding-furnaces-mim-and-cim/pds/index.html">--}}
        {{--<img src="images/news-competition.jpg" width="223" height="131" alt="">--}}
        {{--</a> <span><a--}}
        {{--href="products/application-specific-furnaces/metal-and-ceramic-injection-moulding-furnaces-mim-and-cim/pds/index.html">Debinding--}}
        {{--and sintering in one furnace - PDS</a></span>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="products/vacuum-furnace/tube-furnaces/htrh-h2/index.html"> <img--}}
        {{--src="images/news-competition.jpg" width="223" height="131" alt="">--}}
        {{--</a> <span><a href="products/vacuum-furnace/tube-furnaces/htrh-h2/index.html">Hydrogen Tube--}}
        {{--Furnace up to 1600¡ÆC - HTRH-H<sub>2</sub></a></span>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="home/news_detail/1003/dl_details/1/file/54369fa5-484c-41ac-bc3c-0f5200000000/index.html"><img--}}
        {{--src="images/news-competition.jpg" width="170" height="100"--}}
        {{--alt=""></a> <span><a--}}
        {{--href="home/news_detail/1003/dl_details/1/file/54369fa5-484c-41ac-bc3c-0f5200000000/index.html">New--}}
        {{--issue no. 41</a></span>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
    </div>
</div>
@stop