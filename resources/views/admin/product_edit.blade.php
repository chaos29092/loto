@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑产品</div>
                </div>

                <form action="/admin/product/{{$product['id']}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="productName">产品名称(*)</label>
                        <input required type="text" class="form-control" id="productName" name="name" value="{{$product['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryId">产品分类(*)</label>
                        <select class="form-control" id="categoryId" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category['id']}}" @if($product['category_id']==$category['id'])selected="selected"@endif>{{$category['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productTitle">页面标题</label>
                        <input type="text" class="form-control" id="productTitle" name="title" value="{{$product['title']}}">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">页面描述</label>
                        <textarea class="form-control" rows="3" id="productDescription" name="description">{{$product['description']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productName">页面关键词</label>
                        <input type="text" class="form-control" id="productName" name="keywords" value="{{$product['keywords']}}">
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">产品主图（图大于600px比较好，.jpg格式，无法删除图片，这里只能新添，无法修改，欲删除，就删产品）。</label>
                        <input name="mainpic" type="file" id="mainPicture">
                        @if($mainpic)
                            <img src="{{env('QINIU_DOMAIN').$product['mainpic']}}?imageView2/0/w/200/h/200" alt="{{$product['name']}}">
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="categoryPicture">分类页主图（固定大小为：234px*300px，.jpg格式，无法删除图片，这里只能新添，无法修改，欲删除，就删产品）</label>
                        <input name="categorypic" type="file" id="categoryPicture">
                        @if($categorypic)
                            <img src="{{env('QINIU_DOMAIN').$product['categorypic']}}?imageView2/0/w/200/h/200" alt="{{$product['name']}}">
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="categoryPara">分类页简单参数(li列表)：</label>
                        <textarea class="form-control" rows="2" id="categoryPara" name="categorypara">{{$product['categorypara']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productProfile">主要功能介绍（最上面的黑体字）</label>
                        <textarea class="form-control" rows="2" id="productProfile" name="profile">{{$product['profile']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productMain">简单介绍（外观和原理的简单介绍）：</label>
                        <textarea class="form-control" rows="3" id="productMain" name="main">{{$product['main']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productStandard">简单介绍（外观和原理的简单介绍,li列表）：</label>
                        <textarea class="form-control" rows="6" id="productStandard" name="standard">{{$product['standard']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productOptions">可选选项（订购时可选配件或附加件,li列表）：</label>
                        <textarea class="form-control" rows="4" id="productOptions" name="options">{{$product['options']}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">修改</button>
                </form>
                <form action="/admin/product/{{$product['id']}}" method="POST">
                    <input type="hidden" name="_method" value="delete" />
                    {!! csrf_field() !!}
                    <script language="javascript">
                        function delcfm() {
                            if (!confirm("确认要删除？")) {
                                window.event.returnValue = false;
                            }
                        }
                    </script>
                    <button type="submit" class="btn btn-danger" onClick="delcfm()">删除</button>
                </form>
                <br>
                <div>
                    <h2>型号管理</h2>
                    <table class="table">

                        <tr>
                            <td>型号</td>
                            <td>修改日期</td>
                            <td><a href="/admin/model/create/{{$product['id']}}"><button type="button" class="btn btn-primary">新建</button></a></td>
                        </tr>

                        @foreach($models as $model)
                            <tr>
                                <td>{{$model['name']}}</td>
                                <td>{{$model['updated_at']}}</td>
                                <td>


                                    <form action="/admin/model/{{$model['id']}}" method="POST">
                                        <input type="hidden" name="_method" value="delete" />
                                        {!! csrf_field() !!}
                                        <a href="/admin/model/{{$model['id']}}/edit"><button type="button" class="btn btn-success">修改</button></a>
                                        <script language="javascript">
                                            function delcfm() {
                                                if (!confirm("确认要删除？")) {
                                                    window.event.returnValue = false;
                                                }
                                            }
                                        </script>
                                        <button type="submit" class="btn btn-danger" onClick="delcfm()">删除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection