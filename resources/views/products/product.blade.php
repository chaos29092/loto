@extends('master')
@section('title')
    {{$product_this->title}}
@stop
@section('description')
    {{$product_this->description}}
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
                    <li class="current"><a href="/products/{{$product_this->id}}">{{trans('home.features_options')}}</a>
                    </li>
                    <li><a href="/products/{{$product_this->id}}/models">{{trans('home.technical_details')}}</a>
                    </li>
                </ul>

                <div class="product_details grid-parent tab-content">

                    <div class="side">
                        <div class="mediaContainer">
                            <div class="media">
                                <a class="zoom image" rel="product_images"
                                   data-id="products-{{$product_this->id}}" title="{{$product_this->name}}"
                                   href="/{{$product_this['mainpic']}}"><img
                                            src="/{{$product_this['mainpic']}}" alt="{{$product_this['name']}}"></a>

                                <div class="zoomIcon"></div>
                            </div>
                            <div class="thumbnails image">
                                <img data-id="products-{{$product_this->id}}"
                                     src="/{{$product_this['mainpic']}}" width="220" alt="{{$product_this['name']}}">
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

                    <p>
                        <small>{{trans('home.modifications')}}<br> {{trans('home.have_question')}}</small>
                        <a href="mailto:info@aestheticsequipment.com">info@aestheticsequipment.com</a></p>

                </div>

                <div class="csc-default">
                    <div class="csc-header csc-header-n4"><h1>{{trans('home.contact_form')}}</h1></div>
                    <form action='/submit_post' method='POST' accept-charset='UTF-8'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type='text' style='display:none;' id='Pre_url' name='pre_url' value="{{url()->current()}}">


                        <div class="rform rform-inputrow rform-required">
                            <div class="rform-labelfield rform-required"><label
                                        for="mailformCompany/Organisation">{{trans('home.company_organisation')}}*:</label>
                            </div>
                            <input type="text" name="Company" id="mailformCompany/Organisation" size="20"
                                   value="" class="rform-input"></div>

                        <div class="rform rform-inputrow rform-required">
                            <div class="rform-labelfield rform-required"><label
                                        for="mailformFirst_Name">{{trans('home.name')}}*:</label></div>
                            <input type="text" name="Name" id="mailformFirst_Name" size="20" value=""
                                   class="rform-input"></div>


                        <div class="rform rform-inputrow rform-required">
                            <div class="rform-labelfield rform-required"><label for="mailformEmail">E-mail*</label></div>
                            <input type="text" name="Email" id="mailformEmail" size="20" value="" class="rform-input"></div>
                        <div class="rform rform-inputrow rform-required">
                            <div class="rform-labelfield rform-required"><label for="mailformPhone">Phone:</label></div>
                            <input type="text" name="Phone" id="mailformPhone" size="20" value="" class="rform-input"></div>
                        <div class="rform rform-inputrow">
                            <div class="rform-label">{{trans('home.request')}}</div>
                            <div class=="clear"><!-- ! --></div>
                        </div>
                        <div class="rform rform-inputrow rform-comment">
                            <div class="rform-labelfield"><i>{{trans('home.contact_request')}}</i></div>
                            <div class=="clear"><!-- ! --></div>
                        </div>
                        <div class="rform rform-inputrow rform-required">
                            <div class="rform-labelfield rform-required"><label
                                        for="mailformRequest">{{trans('home.your_request')}}*:</label>
                            </div>
                            <textarea name="Description" id="mailformRequest" cols="20" rows="8"></textarea></div>


                        <div class="rform rform-inputrow">
                            <div class="rform-labelfield"></div>
                            <input type="submit" name="formtype_mail" id="mailformformtype_mail"
                                   value="{{trans('home.submit')}}"
                                   class="rform-submitbutton"></div>

                    </form>
                </div>


                <div class="tab-loading"></div>
            </div>
        </div>
    </div>
@stop

