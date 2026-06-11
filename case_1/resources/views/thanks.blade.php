@extends('layouts.common')

@section('css')
  <link rel="stylesheet" href="{{asset('css/thanks.css')}}">

@section('content')

<div class="page-con">
  <h1>お問い合わせありがとうございます。</h1>
  <p>改めてご連絡させていただきます。</P>

  <p class="redirect-message">３秒後にトップページへ戻ります。

  <script>
    setTimeout(function() {
        window.location.href = '/';
    }, 3000); // 3秒後
  </script>
</div>


@endsection
