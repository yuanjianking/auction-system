@extends('managely')
@section('title')
    编辑文章
@stop
        <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/assets/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}"
          type="text/css">
    <link rel="stylesheet" href="{{asset('css/assets/wangEditor-2.1.22/dist/css/wangEditor.min.css')}}" type="text/css">
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="pull-right header"></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_17495614">
                            <div class="box ">
                                <div class="box-body" style="display: block;">
                                    <form method="post" action="{{url('information/'.$field->file_id)}}" class="form-horizontal"
                                          accept-charset="UTF-8">
                                        <input type="hidden" name="_method" value="put"/>
                                        {{csrf_field()}}
                                        <div class="box-body">
                                            <div class="form-group 1">
                                                <label for="title" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-6">
                                                    @if(count($errors)>0)
                                                        @if(is_object($errors))
                                                            @foreach($errors->all() as $error)
                                                                <p>{{$error}}</p>
                                                            @endforeach
                                                        @else
                                                            <p>{{$errors}}</p>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group 1">
                                                <label for="title" class="col-sm-2 control-label">文章作者</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input type="text" id="file_editor" name="file_editor"
                                                               class="form-control" value="{{$field->file_editor}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group 1">
                                                <label for="title" class="col-sm-2 control-label">文章名称</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-pencil"></i></span>
                                                        <input type="text" id="file_name" name="file_name"
                                                               class="form-control" value="{{$field->file_name}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--<div class="form-group 1">--}}
                                                {{--<label for="title" class="col-sm-2 control-label">文章分类</label>--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<div class="input-group">--}}
                                                        {{--<input type="text" id="file_category" name="file_category"--}}
                                                               {{--class="form-control" placeholder="输入分类"/>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            <div class="form-group 1">
                                                <label for="title" class="col-sm-2 control-label">文章标题</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-pencil"></i></span>
                                                        <input type="text" id="file_title" name="file_title"
                                                               class="form-control"
                                                               value="{{$field->file_title}}"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group 1">
                                                <label for="text1" class="col-sm-2 control-label">文章内容</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" id="file_area" name="file_area"
                                                              style="width: 1024px;height:400px;" >{{$field->file_area}}
                                                    </textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="btn-group pull-left">
                                                    <button type="reset" class="btn btn-warning pull-right">重 置
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="btn-group pull-right">
                                                    <button type="submit" class="btn btn-info pull-right">提 交
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('css/assets/wangEditor-2.1.22/dist/js/wangEditor.min.js')}}"></script>
    <script data-exec-on-popstate>
        $(function () {
            var editor = new wangEditor('file_area');
            // 上传图片
            editor.config.uploadImgFileName = 'myFileName';
            editor.config.uploadImgUrl = "{{url('upload')}}";
            // 配置自定义参数
            editor.config.uploadParams = {
                '_token': "{{csrf_token()}}",
            };
            editor.create();
        });

    </script>
    <div class="pull-right hidden-xs">
        <strong></strong>&nbsp;&nbsp;
    </div>
@stop