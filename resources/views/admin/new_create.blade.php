@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新建新闻或案例</div>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/admin/new" method="POST" enctype = "multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="newTitle">新闻标题(*)</label>
                        <input required type="text" class="form-control" id="newTitle" name="title" placeholder="新闻或案例标题，最好带有关键字">
                    </div>
                    <div class="form-group">
                        <label for="newTag">分类(*)</label>
                        <select class="form-control" id="newTag" name="tag">
                            <option value="news" selected="selected">News</option>
                            <option value="cases">Cases</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newImage">主图，最大200*250吧,.jpg格式。</label>
                        <input name="image" type="file" />
                    </div>
                    <div class="form-group">
                        <label for="profile">简介（重要的事都在这讲，这个也会显示在列表页）：</label>
                        <textarea class="form-control" rows="6" id="profile" name="profile"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="body">正文，用2个 br 标签来空行：</label>
                        <textarea class="form-control" rows="6" id="body" name="body"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">新建</button>
                </form>

            </div>
        </div>
    </div>
@endsection
