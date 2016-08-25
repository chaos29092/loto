@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新建产品</div>
                </div>

                <form action="/admin/product" method="POST" enctype = "multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="productName">产品名称(*)</label>
                        <input required type="text" class="form-control" id="productName" name="name" placeholder="产品名称">
                    </div>
                    <div class="form-group">
                        <label for="categoryId">产品分类(*)</label>
                        <select class="form-control" id="categoryId" name="category_id">
                            <option value="1" selected="selected">Muffle Furnace</option>
                            <option value="2">Tube Furnace</option>
                            <option value="3">CVD & PECVD Systems</option>
                            <option value="4">Dental Furnace</option>
                            <option value="5">Vacuum Furnace & Atmosphere Furnace</option>
                            <option value="6">Customized Furnaces</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productTitle">页面标题</label>
                        <input type="text" class="form-control" id="productTitle" name="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">页面描述</label>
                        <textarea class="form-control" rows="3" id="productDescription" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productName">页面关键词</label>
                        <input type="text" class="form-control" id="productName" name="keywords" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="mainPicture">产品主图（使用七牛云，图大于600px比较好，要求.jpg格式）。</label>
                        <input name="mainpic" type="file" />
                    </div>

                    <div class="form-group">
                        <label for="categoryPicture">分类页主图（直接用七牛云存储的相关链接，234px*300px，jpg）</label>
                        <input name="categorypic" type="file" id="categoryPicture">

                    </div>
                    <div class="form-group">
                        <label for="categoryPara">分类页简单参数(li列表)：</label>
                        <textarea class="form-control" rows="2" id="categoryPara" name="categorypara"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productProfile">主要功能介绍（最上面的黑体字）</label>
                        <textarea class="form-control" rows="2" id="productProfile" name="profile"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productMain">简单介绍（外观和原理的简单介绍）：</label>
                        <textarea class="form-control" rows="3" id="productMain" name="main"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productStandard">简单介绍（外观和原理的简单介绍,li列表）：</label>
                        <textarea class="form-control" rows="6" id="productStandard" name="standard"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productOptions">可选选项（订购时可选配件或附加件,li列表）：</label>
                        <textarea class="form-control" rows="4" id="productOptions" name="options"></textarea>
                    </div>


                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
