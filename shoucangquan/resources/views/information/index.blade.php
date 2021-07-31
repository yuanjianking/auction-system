@extends('managely')
@section('title')
    文章管理
@stop

<link rel="stylesheet" href="{{asset('css/assets/AdminLTE/plugins/iCheck/all.css')}}" type="text/css">
<style>
    .btn-group > .btn + .dropdown-toggle {
        padding-right: 8px;
        padding-left: 8px;
        padding-bottom: 18px;
    }
</style>
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="pull-right header"></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_30427182">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                    <span style="position: absolute;left: 10px;top: 5px;">
                                        <input type="checkbox" class="grid-select-all"/>&nbsp;
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-default"> 编辑</a>
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                                        data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#" class="grid-batch-0">删除</a></li>
                                                </ul>
                                            </div>
                                    </span>
                                    <div class="box-tools">
                                        <div class="form-inline pull-right">
                                            <form action="{{url('information')}}" method="get">
                                                {{csrf_field()}}
                                                <fieldset>
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><strong>文章名</strong></span>
                                                        <input type="text" class="form-control" placeholder="搜索"
                                                               name="file_name" value=""></div>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-btn">
                                                            <button type="submit" class="btn btn-primary"><i
                                                                        class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="btn-group pull-right" style="margin-right: 10px">
                                            <a href="{{url('information/create')}}"
                                               class="btn btn-sm btn-success">
                                                <i class="fa fa-save"></i>&nbsp;&nbsp;新建
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>ID</a>
                                            </th>
                                            <th>名称</th>
                                            <th>标题</th>
                                            <th>作者</th>
                                            <th>点击</th>
                                            <th>创建时间</th>
                                            <th>更新时间</th>
                                            <th>编辑</th>
                                        </tr>
                                        @foreach($data as $d)
                                            <tr>
                                                <td><input type="checkbox" class="grid-row-checkbox"
                                                           data-id="{{$d->file_id}}"/></td>
                                                <td>{{$d->file_id}}</td>
                                                <td><a href="{{url('information/'.$d->file_id.'/edit')}}"
                                                       class='grid-editable-title'
                                                       data-value='12123'>{{$d->file_name}}</a></td>
                                                <td>{{$d->file_title}}</td>
                                                <td>{{$d->file_editor}}</td>
                                                <td>{{$d->file_view}}</td>
                                                <td>{{$d->created_at}}</td>
                                                <td>{{$d->updated_at}}</td>
                                                <td><a href="{{url('information/'.$d->file_id.'/edit')}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a><a href="javascript:void(0);" data-id="{{$d->file_id}}"
                                                           class="grid-row-delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a></td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                                <div class="box-footer clearfix">
                                    显示 <b>{{count($data)}}</b>条记录
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        {{$data->links()}}
                                    </ul>

                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                    <!-- ./wrapper -->
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('css/assets/Prism/prism.js')}}"></script>
    <script src="{{asset('css/assets/AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('css/assets/layer/layer.js')}}"></script>

    <script src="http://120.26.143.106/packages/admin/AdminLTE/dist/js/app.min.js"></script>
    <script src="{{asset('css/assets/jquery-pjax/jquery.pjax.js')}}"></script>
    <script data-exec-on-popstate>
        $(function () {
            Prism.highlightAll();
            $('.grid-row-checkbox').iCheck({checkboxClass: 'icheckbox_minimal-blue'}).on('ifChanged', function () {
                if (this.checked) {
                    $(this).closest('tr').css('background-color', '#ffffd5');
                } else {
                    $(this).closest('tr').css('background-color', '');
                }
            });

            $('.grid-row-delete').click(function () {
                var id = $(this).data('id');
                layer.confirm("您确定要删除这篇文章吗？", {
                    btn: ['确定', '取消']//按钮
                }, function () {
                    $.post("{{url('information/')}}/" + id, {
                        '_method': 'delete',
                        '_token': "{{csrf_token()}}"
                    }, function (data) {
                        if (data.status == 0) {
                            location.href = location.href;
                            layer.msg('删除成功！', {icon: 6});
                        } else {
                            layer.msg('删除失败！', {icon: 5});
                        }
                    });
                })
            });

            $('.grid-select-all').iCheck({checkboxClass: 'icheckbox_minimal-blue'});

            $('.grid-select-all').on('ifChanged', function (event) {
                if (this.checked) {
                    $('.grid-row-checkbox').iCheck('check');
                } else {
                    $('.grid-row-checkbox').iCheck('uncheck');
                }
            });

            var selectedRows = function () {
                var selected = [];
                $('.grid-row-checkbox:checked').each(function () {
                    selected.push($(this).data('id'));
                });

                return selected;
            }


            $('.grid-batch-0').on('click', function () {
                layer.confirm("您确定要删除这些篇文章吗？", {
                    btn: ['确定', '取消']//按钮
                }, function () {
                    $.ajax({
                        method: 'post',
                        url: '{{url('information/')}}/' + selectedRows().join(),
                        data: {
                            '_method': 'delete',
                            '_token': "{{csrf_token()}}"
                        },
                        success: function (data) {
                            myrefresh();
                            layer.msg('删除成功！', {icon: 6});
                        },
                        error: function (data) {
                            layer.msg('删除' + data.file_id + '失败！', {icon: 5});
                        }
                    });
                })
            });

        });
        function myrefresh(){
            window.location.reload();
        }
    </script>
@stop
