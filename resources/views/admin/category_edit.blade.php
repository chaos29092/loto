@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑产品分类(分类如删除，得把本分类的产品再重新分到新的分类中)</div>
                </div>

                <form action="/admin/category/{{$category['id']}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="categoryName">分类名称(*)</label>
                        <input required type="text" class="form-control" id="categoryName" name="name" value="{{$category['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="maxTemp">最高温度</label>
                        <input type="text" class="form-control" id="maxTemp" name="max_temp" value="{{$category['max_temp']}}">
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">总分类页缩略图（使用七牛云，227*150px，要求.jpg格式，只能添加，无法修改，如修改，最好直接在七牛云里改，不然会影响到已分类的产品）。</label>
                        <input name="main_pic" type="file" />
                        @if($main_pic)
                            <img src="{{env('QINIU_DOMAIN').$category['main_pic']}}?imageView2/0/w/200/h/200" alt="{{$category['name']}}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">分类页banner（使用七牛云，768*210px，要求.jpg格式，只能添加，无法修改，如修改，最好直接在七牛云里改，不然会影响到已分类的产品）。</label>
                        <input name="banner" type="file" />
                        @if($banner)
                            <img src="{{env('QINIU_DOMAIN').$category['banner']}}?imageView2/0/w/200/h/200" alt="{{$category['name']}}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">分类页简单介绍：</label>
                        <textarea class="form-control" rows="6" id="description" name="description">{{$category['description']}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection