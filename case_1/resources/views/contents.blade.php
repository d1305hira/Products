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
        <h3 class="h3_1">土地や建物の調査や測量登記</h3>
        <p class="p_1">土地や建物などの調査や測量、登記手続きをさせていただきます</p>
      </div>
    </div>
    <div class="con2">
      <img src="{{asset('images/contents_page-con2.png')}}">
        <div class="con2-text">
          <h3 class="h3_2">農地転用申請</h3>
          <p class="p_2">使わなくなった農地の処分にお困りではないですか？</br>
            処分に伴う不動産登記手続きなどお任せください
          </p>
        </div>
    </div>
    <div class="con3">
      <img src="{{asset('images/contents_page-con3.png')}}">
        <div class="con3-text">
          <h3 class="h3_3">相続に関するお手続き</h3>
          <p class="p_3">相続に関するご相続人調査や書類作成など、</br>
            相続に関するお手続きもご相談ください。 
          </p>
        </div>
    </div>
  </div>
</div>
@endsection