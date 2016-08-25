@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新建产品型号</div>
                </div>

                <form action="/admin/model" method="POST" enctype = "multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="modelName">型号名称(*)</label>
                        <input required type="text" class="form-control" id="modelName" name="name" placeholder="产品型号名称">
                    </div>
                    <div class="form-group">
                        <label for="main">主要参数（tr td  的格式）</label>
                        <textarea class="form-control" rows="5" id="main" name="main">
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="more">更多参数（tr td  的格式）</label>
                        <textarea class="form-control" rows="10" id="more" name="more">
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </textarea>
                    </div>
                    <input type="hidden" name="product_id" value="{{$product_id}}">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
