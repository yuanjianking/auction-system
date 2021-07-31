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
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
    <title>中华古玉- @yield('title')</title>
</head>
<body>
<header>
    <div class="header-user-info">
        <div class="header-user-welcome">欢迎您马小跳登录中华古玉网！<a href="{{url('user-info')}}"> @yield('username')</a></div>
        <div class="head-user-logo">
            <a href='/'><img src="{{asset('images/logo.gif')}}" border='0'/></a>
        </div>
        <div class="head-user-name">
            中华古玉
        </div>

        <div class="head-user-login">
            <ul>
                <li>
                    <a href="{{url('help')}}">帮助</a>
                </li>
                <li>
                    <a href="{{url('password')}}">找回密码</a>
                </li>
                <li>
                    <a href="{{url('register')}}">注册</a>
                </li>
                @if(empty($user))
                    <li>
                        <a href="{{url('login')}}">登录</a>
                    </li>
                @else
                    <li>
                        <a href="{{url('logout')}}">注销</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>
<nav>
        <ul>
            <li><a href="/">首 页</a></li>
            <li><a href="{{url('home/info-list')}}">文 本</a></li>
            {{--<li><a href="{{url('home/video-list')}}">课 件</a></li>--}}
        </ul>
</nav>
<div class="container">
    @yield('content')
</div>
<footer>
    <div class="footer-box">
        <div class="footer-img"><img src="{{asset('images/ewm.jpg')}}"/></div>
        <span id="copyright">&copy;2016 中华古玉 京ICP证030173号 京公网安备11000002000001号<br>
公司地址：北京市海淀区洋河路大河街小河楼B座
        </span></div>
</footer>
</body>

</html>
