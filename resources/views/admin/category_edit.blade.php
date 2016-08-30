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
                        <label for="maxTemp">主要参数</label>
                        <input type="text" class="form-control" id="maxTemp" name="max_temp" value="{{$category['max_temp']}}">
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">总分类页缩略图（227*150px）。</label>
                        <input name="main_pic" type="file" />
                        @if($category['main_pic'])
                            <img src="/{{$category['main_pic']}}" alt="{{$category['name']}}" width="200">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">分类页banner（768*210px）。</label>
                        <input name="banner" type="file" />
                        @if($category['banner'])
                            <img src="/{{$category['banner']}}" alt="{{$category['name']}}" width="200">
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