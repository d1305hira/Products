@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{asset('css/home_p2.css')}}">
@endsection

@section('content')
  <div class="whole-container">
  	<div class="container">
      <div class="greeting">
        <h1>お困りごと、ご相談ください</h1>
        <div class="header-label">
          <span class="s1">〇〇〇</span>
          <span class="s2">A事務所</span>
        </div>
      </div>
	  	<div class="contents">
        <h2 class="int-greet">ご案内</h2>
          <h3 class="int-title1">こんにちは、A事務所です。</h3>
            <p class="p1">京都府のA事務所です。</p>
          <h3 class="int-title2">こんなことでお困りではありませんか？</h3>
            <p class="p2">□業務A</p>
            <p class="p3">□業務B</p>
            <p class="p4">□業務C</p>
            <p class="p5">お任せください！</br>
            	小さなお困り事でもお気軽にご相談ください。</p>
      </div>
      <div class="con-title">業務内容</div>
      <div class="con-nav">
        <div class="con-1">					  
          <nav>
            <img src="{{ asset('images/con_aicon1.png') }}">
            <a href="{{ route('contents') }}" class="contents-link">取り扱い業務</a>
          </nav>
        </div>
        <div class="con-2">
          <nav>
            <img src="{{ asset('images/con_aicon2.png') }}">
            <a href="{{ route('access') }}" class="access-link">アクセス</a>
         </nav>
        </div>
        <div class="con-3">
          <nav>
            <img src="{{ asset('images/con_aicon3.png') }}">
            <a href="{{ route('contact') }}" class="contact-link">お問い合わせ</a>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection