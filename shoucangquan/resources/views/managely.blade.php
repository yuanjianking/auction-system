<!DOCTYPE html>

<html lang="zh">
<head>
    <meta charset="UTF-8">
    <!-- 搜索引擎抓取 -->
    <meta name="robots" content="index,follow"/>
    <!-- 移动设备缩放 -->
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- 苹果工具栏 -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <!-- 苹果状态栏 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <!-- 页面中电话有效 -->
    <meta name="format-detection" content="telephone=yes"/>
    <!-- windows phone 点击无高光 -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>中华古玉- @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/assets/AdminLTE/dist/css/AdminLTE.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<header>
    <div class="header-user-info">
        <div class="header-user-welcome">欢迎您马小跳登录中华古玉网！<a href="{{asset('user-info')}}"> @yield('username')</a>
        </div>
        <div class="head-user-logo">
            <a href='/'><img src="{{asset('images/logo.gif')}}" border='0'/></a>
        </div>
        <div class="head-user-name">
            中华古玉
        </div>

        <div class="head-user-login">
            <ul>
                <li>
                    <a href="{{asset('help')}}">帮助</a>
                </li>
                <li>
                    <a href="{{asset('password')}}">找回密码</a>
                </li>
                <li>
                    <a href="{{asset('register')}}">注册</a>
                </li>
                @if(empty($user))
                    <li>
                        <a href="{{asset('login')}}">登录</a>
                    </li>
                @else
                    <li>
                        <a href="{{asset('logout')}}">注销</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>
<div class="wrapper">
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">基本操作</li>
                <li class="treeview">
                        <li>
                            <a href="{{url('information/create')}}"><i class="fa fa-gear"></i>
                                <span>添加文章</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('information')}}"><i class="fa fa-bars"></i>
                                <span>文章管理</span>
                            </a>
                        </li>
                    </ul>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <nav>
                <ul>
                    <li><a href="/">首 页</a></li>
                </ul>
            </nav>
        </section>

    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
    <script src="{{asset('css/assets/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('css/assets/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
    <div class="container">
        @yield('content')
    </div>
    </div>
</div>

<footer>
    <div class="footer-box">
        <div class="footer-img"><img src="{{asset('images/ewm.jpg')}}"/></div>
        <span id="copyright">&copy;2016 中华古玉 京ICP证030173号 京公网安备11000002000001号<br>
            公司地址：北京市海淀区洋河路大河街小河楼B座
        </span>
    </div>
</footer>
</body>

</html>
