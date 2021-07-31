@extends('main')
@section('title')
  个人文章
@stop
<link href="{{asset('css/article/css/styles.css')}}" rel="stylesheet">
@section('content')
<article>
  <header class="file-header">
    <div class="toptitle">
      <h1>{{$field->file_name}}</h1>
      <p class="byline">——{{$field->file_editor}}</p>
    </div>
      <object id="swftitlebar" data="images/79514.swf" width="100%" height="220" type="application/x-shockwave-flash">
          <param name="allowScriptAccess" value="always">
          <param name="allownetworking" value="all">
          <param name="allowFullScreen" value="true">
          <param name="wmode" value="transparent">
          <param name="menu" value="false">
          <param name="scale" value="noScale">
          <param name="salign" value="1">
      </object>
    <p class="sign" data-value="{{$field->file_title}}">{{$field->file_title}}</p>
  </header>
  <div class="rightbox box">
    <ul class="text">
      {!! $field->file_area !!}
        <p class="autor"><span
                    class="dtime f_l">{{date('Y-m-d',strtotime($field->updated_at))}}</span><span
                    class="viewnum f_r">浏览（
                        <a>{{$field->file_view}}</a>）</span></p>
    </ul>
  </div>
  <div class="footerbox box">
      <p>上一篇：
        @if($article['pre'])
       <a href="{{url('home/info-detail/'.$article['pre']->file_id)}}">{{$article['pre']->file_title}}</a>
        @else
            <span>没有上一篇了</span>
        @endif
      </p>
            <p>下一篇：
        @if($article['next'])
        <a href="{{url('home/info-detail/'.$article['next']->file_id)}}">{{$article['next']->file_title}}</a>
        @else
            <span>没有下一篇了</span>
        @endif
            </p>
    </div>
  <div class="blank"></div>
</article>
@stop