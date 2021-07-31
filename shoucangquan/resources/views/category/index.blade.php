<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/assets/font-awesome/css/font-awesome.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/dist/css/skins/skin-blue.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/plugins/iCheck/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('css/assets/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/bootstrap-fileinput/css/fileinput.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/plugins/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/plugins/ionslider/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/plugins/ionslider/ion.rangeSlider.skinNice.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('css/assets/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/assets/nestable/nestable.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/toastr/build/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/bootstrap3-editable/css/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/google-fonts/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/dist/css/AdminLTE.min.css')}}">

    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{asset('css/assets/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('css/assets/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('css/assets/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('css/assets/AdminLTE/dist/js/app.min.js')}}"></script>
    <script src="{{asset('css/assets/jquery-pjax/jquery.pjax.js')}}"></script>


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
        <!-- Logo -->
        {{--<a href="/admin" class="logo">--}}
        {{--<!-- mini logo for sidebar mini 50x50 pixels -->--}}
        {{--<span class="logo-mini"><b>Laravel-admin</b></span>--}}
        {{--<!-- logo for regular state and mobile devices -->--}}
        {{--<span class="logo-lg"><b>Laravel-admin</b></span>--}}
        {{--</a>--}}

                <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{asset('css/assets/AdminLTE/dist/img/user2-160x160.jpg')}}" class="user-image"
                                 alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Administrator</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{asset('css/assets/AdminLTE/dist/img/user2-160x160.jpg')}}"
                                     class="img-circle" alt="User Image">

                                <p>
                                    Administrator
                                    <small>Member since admin</small>
                                </p>
                            </li>
                            <li class="user-footer">


                                <div class="pull-right">
                                    <a href="/admin/auth/logout" class="btn btn-default btn-flat">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->


                </ul>
            </div>
        </nav>

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
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="#" class="grid-batch-0">删除</a></li>
    </ul>
</div> <a class="btn btn-sm btn-primary grid-refresh"><i class="fa fa-refresh"></i> 刷新</a>
        </span>

                                    <div class="box-tools">
                                        <div class="form-inline pull-right">
                                            <form action="/admin/demo/multiple-images" method="get" pjax-container>
                                                <fieldset>

                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon"><strong>Id</strong></span>
                                                        <input type="text" class="form-control" placeholder="Id"
                                                               name="id" value=""></div>

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
                                            <a href="/admin/demo/multiple-images/create"
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
                                            <th></th>
                                            <th>ID<a class="fa fa-fw fa-sort"
                                                     href="http://120.26.143.106/admin/demo/multiple-images?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a>
                                            </th>
                                            <th>分类名称</th>
                                            <th>标题</th>
                                            <th>创建时间</th>
                                            <th>更新时间</th>
                                            <th>编辑</th>
                                        </tr>
                                        @foreach($data as $d)
                                            <tr>
                                                <td><input type="checkbox" class="grid-row-checkbox" data-id="16"/></td>
                                                <td>{{$d->cate_id}}</td>
                                                <td><a href='#' class='grid-editable-title' data-type='text'
                                                       data-pk='16' data-url='/admin/demo/multiple-images/16'
                                                       data-value='12123'>{{$d->cate_name}}</a></td>
                                                <td>{{$d->cate_title}}</td>
                                                <td>2017-01-01 18:49:20</td>
                                                <td>2017-01-17 19:57:02</td>
                                                <td><a href="/admin/demo/multiple-images/16/edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a><a href="javascript:void(0);" data-id="16"
                                                           class="grid-row-delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a></td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                                <div class="box-footer clearfix">
                                    显示 <b>10</b>条记录
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <!-- Previous Page Link -->
                                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>

                                        <!-- Pagination Elements -->
                                        <!-- "Three Dots" Separator -->

                                        <!-- Array Of Links -->
                                        <li class="page-item active"><span class="page-link">1</span></li>

                                        <!-- Next Page Link -->
                                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                                    </ul>

                                    <label class="control-label pull-right"
                                           style="margin-right: 10px; font-weight: 100;">

                                        <small>显示</small>
                                        &nbsp;
                                        <select class="input-sm grid-per-pager" name="per-page">
                                            <option value="http://120.26.143.106/admin/demo/multiple-images?per_page=10">
                                                10
                                            </option>
                                            <option value="http://120.26.143.106/admin/demo/multiple-images?per_page=20"
                                                    selected>20
                                            </option>
                                            <option value="http://120.26.143.106/admin/demo/multiple-images?per_page=30">
                                                30
                                            </option>
                                            <option value="http://120.26.143.106/admin/demo/multiple-images?per_page=50">
                                                50
                                            </option>
                                            <option value="http://120.26.143.106/admin/demo/multiple-images?per_page=100">
                                                100
                                            </option>
                                        </select>
                                        &nbsp;
                                        <small>记录</small>
                                    </label>

                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <div class="tab-pane " id="tab_85785411">
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
                                    $('.grid-editable-title').editable({"name": "title"});

                                    $('.grid-row-delete').click(function () {
                                        var id = $(this).data('id');
                                        if (confirm("Are you sure to delete this item ?")) {
                                            $.post('/admin/demo/multiple-images/' + id, {
                                                _method: 'delete',
                                                '_token': 'xoLe6NKcB6NTJtTfEymKvDYM8tV7jzJHuZjg7GCJ'
                                            }, function (data) {

                                                $.pjax.reload('#pjax-container');

                                                if (typeof data === 'object') {
                                                    if (data.status) {
                                                        toastr.success('Delete succeeded !');
                                                    } else {
                                                        toastr.error('Delete failed !');
                                                    }
                                                }
                                            });
                                        }
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

                                        if (confirm("Are you sure to delete this item ?")) {
                                            $.ajax({
                                                method: 'post',
                                                url: '/admin/demo/multiple-images/' + selectedRows().join(),
                                                data: {
                                                    _method: 'delete',
                                                    _token: 'xoLe6NKcB6NTJtTfEymKvDYM8tV7jzJHuZjg7GCJ'
                                                },
                                                success: function (data) {
                                                    $.pjax.reload('#pjax-container');
                                                    toastr.success('Delete succeeded !');
                                                }
                                            });
                                        }
                                    });


                                    $('.grid-refresh').on('click', function () {
                                        $.pjax.reload('#pjax-container');
                                        toastr.success('Refresh succeeded !');
                                    });


                                    $('.grid-per-pager').on("change", function (e) {
                                        $.pjax({url: this.value, container: '#pjax-container'});
                                    });

                                });
                            </script>
                        </div>

                            <!-- To the right -->
                            <div class="pull-right hidden-xs">
                                <strong>Version</strong>&nbsp;&nbsp; 1.0
                            </div>
                            <!-- Default to the left -->
                            <strong>Powered by <a href="https://github.com/z-song/laravel-admin" target="_blank">laravel-admin</a></strong>
                    </div>
                    <!-- ./wrapper -->
                </div>
            </div>
        </div>
    </section>
</div>
<!-- REQUIRED JS SCRIPTS -->
<script src="{{asset('css/assets/AdminLTE/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('css/assets/nestable/jquery.nestable.js')}}"></script>
<script src="{{asset('css/assets/toastr/build/toastr.min.js')}}"></script>
<script src="{{asset('css/assets/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>

<script src="http://map.qq.com/api/js?v=2.exp"></script>
<script src="http://120.26.143.106/packages/prism/prism.js')}}"></script>
<script src="{{asset('css/assets/AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('css/assets/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('css/assets/AdminLTE/plugins/input-mask/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{asset('css/assets/moment/min/moment-with-locales.min.js')}}"></script>
<script src="{{asset('css/assets/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('css/assets/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js')}}"></script>
<script src="{{asset('css/assets/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
<script src="{{asset('css/assets/AdminLTE/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('css/assets/number-input/bootstrap-number-input.js')}}"></script>
<script src="{{asset('css/assets/AdminLTE/plugins/ionslider/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('css/assets/bootstrap-switch/dist/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('css/assets/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js')}}"></script>



<script>

    $.fn.editable.defaults.params = function (params) {
        params._token = 'xoLe6NKcB6NTJtTfEymKvDYM8tV7jzJHuZjg7GCJ';
        params._editable = 1;
        params._method = 'PUT';
        return params;
    };

    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: 'slideDown',
        timeOut: 4000
    };

    $.pjax.defaults.timeout = 5000;
    $.pjax.defaults.maxCacheLength = 0;
    $(document).pjax('a:not(a[target="_blank"])', {
        container: '#pjax-container'
    });

    $(document).on('submit', 'form[pjax-container]', function (event) {
        $.pjax.submit(event, '#pjax-container')
    });

    $(document).on("pjax:popstate", function () {

        $(document).one("pjax:end", function (event) {
            $(event.target).find("script[data-exec-on-popstate]").each(function () {
                $.globalEval(this.text || this.textContent || this.innerHTML || '');
            });
        });
    });

</script>

</body>
</html>
