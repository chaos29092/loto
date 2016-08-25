@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Categories List</div>


            </div>
            <table class="table">

                <tr>
                <td>类目</td>
                <td>id</td>
                <td>修改日期</td>
                    <td><a href="/admin/category/create"><button type="button" class="btn btn-primary">新建</button></a></td>
                </tr>

                @foreach($categories as $category)
                    <tr>
                        <td>{{$category['name']}}</td>
                        <td>{{$category['id']}}</td>
                        <td>{{$category['updated_at']}}</td>
                        <td>


                            <form action="/admin/category/{{$category['id']}}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                                <a href="/admin/category/{{$category['id']}}/edit"><button type="button" class="btn btn-success">修改</button></a>
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
@endsection
