@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新建产品分类</div>
                </div>

                <form action="/admin/category" method="POST" enctype = "multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="categoryName">分类名称(*)</label>
                        <input required type="text" class="form-control" id="categoryName" name="name" placeholder="产品分类名称">
                    </div>
                    <div class="form-group">
                        <label for="maxTemp">最高温度</label>
                        <input type="text" class="form-control" id="maxTemp" name="max_temp" value="Max. temp. up to xxx°C">
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">总分类页缩略图（使用七牛云，227*150px，要求.jpg格式）。</label>
                        <input name="main_pic" type="file" />
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">分类页banner（使用七牛云，768*210px，要求.jpg格式）。</label>
                        <input name="banner" type="file" />
                    </div>
                    <div class="form-group">
                        <label for="description">分类页简单介绍：</label>
                        <textarea class="form-control" rows="6" id="description" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
