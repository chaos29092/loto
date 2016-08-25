@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑新闻或案例</div>
                </div>

                <form action="/admin/new/{{$new['id']}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newTitle">新闻标题(*)</label>
                        <input required type="text" class="form-control" id="newTitle" name="title" value="{{$new['title']}}">
                    </div>
                    <div class="form-group">
                        <label for="newTag">分类(*)</label>
                        <select class="form-control" id="newTag" name="tag">
                            <option value="news" @if($new['tag']=='news') selected="selected" @endif>News</option>
                            <option value="cases" @if($new['tag']=='cases') selected="selected" @endif>Cases</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newImage">主图，最大200*250,.jpg格式，只能新添加，不能修改，如修改，删除新闻重新建</label>
                        <input name="image" type="file" />
                        @if($image)
                            <img src="{{env('QINIU_DOMAIN').$new['image']}}?imageView2/0/w/200/h/200" alt="{{$new['title']}}">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="profile">简介（重要的事都在这讲，这个也会显示在列表页）：</label>
                        <textarea class="form-control" rows="6" id="profile" name="profile">{!! $new['profile'] !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="body">正文，用2个 br 标签来空行：</label>
                        <textarea class="form-control" rows="6" id="body" name="body">{!! $new['body'] !!}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">修改</button>
                </form>
                <form action="/admin/new/{{$new['id']}}" method="POST">
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
            </div>
        </div>
    </div>
@endsection