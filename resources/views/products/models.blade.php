@extends('master')
@section('title')
    {{$product_this->title}} Models
@stop
@section('description')
    Models - {{$product_this->description}}
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
            <div id="c109552" class="csc-default"><!-- web-2015-carbolite-models.tpl -->

                <h1>{{ucwords($product_this->name)}}</h1>

                <ul class="tabs">
                    <li>
                        <a href="/products/{{$product_this->id}}">{{trans('home.features_options')}}</a></li>
                    <li class="current"><a
                                href="/products/{{$product_this->id}}/models">{{trans('home.technical_details')}}</a>
                    </li>
                </ul>

                <div class="tab-content product_details grid-parent">
                    @foreach($models_this as $model)
                        <h2>{{ucwords($model->name)}}</h2>
                        <table>
                            {!! $model->main !!}
                        </table>

                        <p>
                            <a href="/products/{{$product_this->id}}/models/#"
                               data-show-group="{{$model->name}}"
                               onclick="$('[data-group=\'{{$model->name}}\']').show();$('[data-show-group=\'{{$model->name}}\']').hide();$('[data-hide-group=\'{{$model->name}}\']').show();return false;">[{{trans('home.read_more')}}
                                ]</a>
                            <a href="/products/{{$product_this->id}}/models/#"
                               data-hide-group="{{$model->name}}"
                               onclick="$('[data-group=\'{{$model->name}}\']').hide();$('[data-show-group=\'{{$model->name}}\']').show();$('[data-hide-group=\'{{$model->name}}\']').hide();return false;"
                               style="display:none">[{{trans('home.read_less')}}]</a>
                        </p>

                        <table data-group="{{$model->name}}" style="display:none">
                            {!! $model->more !!}
                        </table>
                    @endforeach


                    <p>
                        <strong>{{trans('home.please_note')}}:</strong><br>
                        <small>- {{trans('home.model_note_1')}}<br>
                            - {{trans('home.model_note_2')}}</small>
                    </p>

                    <p>
                        <small>{{trans('home.model_note_3')}}<br> {{trans('home.have_question')}}
                        <a href="mailto:info@furnace-tech.com">info@furnace-tech.com</a></small>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop