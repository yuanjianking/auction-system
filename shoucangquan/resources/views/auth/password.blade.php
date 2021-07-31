@extends('main')

@section('title')
    重置密码
@stop
@section('content')
<div style="text-align: center">
<form method="POST" action="{{ url('/email') }}">
{!! csrf_field() !!}

<div>
    邮箱
    <input type="email" name="email" value="{{ old('email') }}">
</div>

<div>
    <button type="submit">
        发送密码重置链接
    </button>
</div>
</form>
</div>
@stop