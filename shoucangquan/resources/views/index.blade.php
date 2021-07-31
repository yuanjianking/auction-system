@extends('main')
@section('title')
    首页
@stop
@section('content')
    <div class="auctionbox">
        <div class="boxtitle"><span><a href="{{url('home/info-list')}}">更多文本</a></span>文本</div>
        <div class="auctionbox-piclist">
            <ul>
                <li>
                    <div id="auctionimg">
                        <a href="{{url('home/info-list')}}"><img src="{{asset('images/zw.jpg')}}"></a>
                    </div>
                {{--<span id="auctiontext">--}}
                    {{--<p><a href="#">底价：20RMB</a></p>--}}
                    {{--<p><a href="#">名称：白玉</a></p>--}}
                {{--</span>--}}
                </li>

            </ul>
        </div>
    </div>
    {{--<div class="studybox">--}}
        {{--<div class="boxtitle"><span><a href="{{url('home/video-list')}}">更多课件</a></span>课件</div>--}}
        {{--<div class="studylist">--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<div id="studypic">--}}
                        {{--<a href="{{url('home/video-list')}}"><img src="{{asset('images/zw.jpg')}}"></a>--}}
                    {{--</div>--}}
                    {{--<div id="studytext">--}}
                        {{--<h2>规划局海关监管环境</h2>--}}
                        {{--<div class="studynews">--}}
                            {{--战国时期，漆器通常为日常用品。青铜器由于受工艺的制约产量不高，多用于礼器，那时的能工巧匠便在青铜器上进行漆艺创作，铜胎漆器由此诞生。俗语有“百里千刀一斤漆”之说，意思是走一百里路、在漆树上割一千刀，战国时期，漆器通常为日常用品。青铜器由于受工艺的制约产量不高，多用于礼器，那时的能工巧匠便在青铜器上进行漆艺创作，铜胎漆器由此诞生。俗语有“百里千刀一斤漆”之说，意思是走一百里路、在漆树上割一千刀，战国时期<a--}}
                                    {{--href="info-detail">[阅读全文]</a></div>--}}
                        {{--<time>作者：司丕尔 发布于：2016.08.08</time>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop
