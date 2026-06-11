@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/access.css')}}">
@endsection

@section('content')
<div class="page-content">
  <h1>アクセス</h1>
  <div class="info_area">
    <div class="map-info">
      <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d814.0383799546399!2d135.2443611!3d35.30216670000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f25!3m2!1m1!2zMzXCsDE4JzA3LjgiTiAxMzXCsDE0JzM5LjciRQ!5e0!3m2!1sja!2sjp!4v1775874060324!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <a href="https://maps.app.goo.gl/JMxFqKD2dUDT7u887"><span>Googleマップで見る</span></a>
    </div>
    <div class="office-info">
      <img src="{{asset('images/office.png')}}">
      <div class="office-name">A事務所</div>
      <div class="office-address">
        <div class="a1">〒111-1111</div>
        <div class="a2">京都府○○</div>
        <div class="a3">0123-45-6789</di</div>
      </div>
    </div>
  </div>
  <div class="access-info">
    <div class="access-title">公共交通機関</div>
    <div class="access-way">
      <div class="way1">
        <img src="{{asset('/images/way_aicon1.png')}}">
        <div class="discri1">お車をご利用の場合
          <div class="discri2"></div>
        </div>
      </div>  
      <div class="way2">
        <img src="{{asset('/images/way_aicon2.png')}}">
        <div class="discri1">バスをご利用の場合
          <div class="discri2"></div>
        </div>
      </div>  
      <div class="way3">
        <img src="{{asset('/images/way_aicon3.png')}}">
        <div class="discri1">電車をご利用の場合
          <div class="discri2">JR○○駅から○○方面へ徒歩約15分</div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection