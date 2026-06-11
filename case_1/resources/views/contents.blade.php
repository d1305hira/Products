@extends('layouts.common')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/contents.css') }}">
@endsection

@section('content')
<div class="page-content">
  <div class="page-head">
    <h1>取り扱い業務</h1>
    <h2>下記の業務を取り扱っております</h2>
  </div>
  <div class="con-detail">
    <div class="page-content-title">業務内容</div>
    <div class="con1">
      <img src="{{asset('images/contents_page-con1.png')}}">
      <div class="con1-text">
        <h3 class="h3_1">お問い合わせ1</h3>
        <p class="p_1">お手続きさせていただきます</p>
      </div>
    </div>
    <div class="con2">
      <img src="{{asset('images/contents_page-con2.png')}}">
        <div class="con2-text">
          <h3 class="h3_2">お問い合わせ2</h3>
          <p class="p_2">お困りではないですか？</br>
            諸手続きはお任せください
          </p>
        </div>
    </div>
    <div class="con3">
      <img src="{{asset('images/contents_page-con3.png')}}">
        <div class="con3-text">
          <h3 class="h3_3">お問い合わせ3</h3>
          <p class="p_3">こんな手続きもご相談ください。 
          </p>
        </div>
    </div>
  </div>
</div>
@endsection