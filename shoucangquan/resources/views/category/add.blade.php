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

    <link rel="stylesheet" href="{{asset('css/assets/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/wangEditor-2.1.22/dist/css/wangEditor.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/dist/css/AdminLTE.min.css')}}">

    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{asset('css/assets/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('css/assets/wangEditor-2.1.22/dist/js/wangEditor.min.js')}}"></script>
    <script src="{{asset('css/assets/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
                        <img src="{{asset('css/assets/AdminLTE/dist/img/user2-160x160.jpg')}}"
                             class="user-image" alt="User Image">
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
            </ul>
        </div>
    </nav>

    <section class="content-header">
        <h1>
           添加文章
            <small></small>
        </h1>

    </section>

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
                                <div class="box-header with-border">
                                    <h3 class="box-title">添加文章</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body" style="display: block;">
                                    <form method="POST" action="{{url('')}}" class="form-horizontal" accept-charset="UTF-8"
                                          pjax-container="1">
                                        <div class="box-body">
                                            <div class="form-group 1">
                                                <label for="title" class="col-sm-2 control-label">分类</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                         <span class="input-group-addon"><i
                                                                     class="fa fa-pencil"></i></span>
                                                        <input type="text" id="title" name="title" class="form-control" placeholder="输入分类"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group 1">
                                                <label for="title" class="col-sm-2 control-label">标 题</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                    class="fa fa-pencil"></i></span>
                                                        <input type="text" id="title" name="title" class="form-control"
                                                               placeholder="输入标题"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group 1">
                                                <label for="text1" class="col-sm-2 control-label">内容</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" id="text1" name="text1"
                                                              placeholder="Input Text"
                                                              style="width: 1024px;height:400px;">

                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <input type="hidden" name="_token"
                                                   value="">
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

                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script data-exec-on-popstate>

        $(function () {

            var editor = new wangEditor('text1');

            // 上传图片（举例）

            editor.config.uploadImgFileName = 'myFileName';
            editor.config.uploadImgUrl = "{{url('upload')}}";
            // 配置自定义参数（举例）
            editor.config.uploadParams = {
                '_token': "{{csrf_token()}}",
            };
            editor.create();

        });
    </script>

    <div class="pull-right hidden-xs">
        <strong>Version</strong>&nbsp;&nbsp; 1.0
    </div>
</div>
</body>
</html>