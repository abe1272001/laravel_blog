<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.master')

<!-- 傳送資料到母模板，並指定變數為title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為content -->
@section('content')
<form id="form1" method="post" action="">
    {!! csrf_field() !!}
    <h2 class="text-3xl text-center">註冊</h2>
    <div class="mb-3">
        <label for="account" class="form-label">帳號</label>
        <input type="text" class="form-control" id="account" name="account" aria-describedby="accountHelp" placeholder="請輸入帳號">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">密碼</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼">
    </div>
    <div class="btn_group">
        <button type="submit" class="btn btn-primary">註冊</button>
    </div>
</form>
@endsection