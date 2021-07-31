@extends('main')
@section('title')
    文章列表
@stop
<link href="{{asset('css/home/css/index.css')}}" rel="stylesheet">
<link href="{{asset('css/home/css/base.css')}}" rel="stylesheet">
@section('content')
    <article>
        <div class="l_box f_l">
            <!-- banner代码 结束 -->
            <div class="topnews">
                @foreach($data as $d)
                    <div class="blogs">
                        <ul>
                            <h3><a href="{{url('home/info-detail/'.$d->file_id)}}">{{$d->file_name}}</a></h3>
                            <p>{{$d->file_title}}</p>
                            <p class="autor"><span
                                        class="dtime f_l">{{date('Y-m-d',strtotime($d->updated_at))}}</span><span
                                        class="viewnum f_r">浏览（
                        <a>{{$d->file_view}}</a>）</span></p>
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="box-footer">
                显示 <b>{{count($data)}}</b>条记录
                <ul class="pagination pagination-sm no-margin pull-right">
                    {{$data->links()}}
                </ul>

            </div>
        </div>
    </article>
    <script type="text/javascript" src="{{asset('css/home/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/home/js/sliders.min.js')}}"></script>
@stop
