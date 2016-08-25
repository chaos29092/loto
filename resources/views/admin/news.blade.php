@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">News List</div>


            </div>
            <table class="table">

                <tr>
                <td>标题</td>
                <td>分类</td>
                <td>修改日期</td>
                    <td>查看页面</td>
                    <td><a href="/admin/new/create"><button type="button" class="btn btn-primary">新建</button></a></td>
                </tr>

                @foreach($news as $new)
                    <tr>
                        <td>{{$new['title']}}</td>
                        <td>{{$new['tag']}}</td>
                        <td>{{$new['updated_at']}}</td>
                        <td><a target="_blank" href="/news/{{$new['id']}}">查看</a></td>
                        <td>
                            <form action="/admin/new/{{$new['id']}}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                                <a href="/admin/new/{{$new['id']}}/edit"><button type="button" class="btn btn-success">修改</button></a>
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
            {{$news->render()}}
        </div>
    </div>
</div>
@endsection
