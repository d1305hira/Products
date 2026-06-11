@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<h1>確認</h1>

<div class="confirm-contacts">
<form action="{{ route('store') }}" method="post">
  @csrf
  <div class="confirm-table">
    <table>
      <tr>
        <td class="left">お名前</td>
        <td class="right"> {{ $contact->name }}
          <input type="hidden" name="name" value="{{ $contact->name }}">
        </td>
      </tr>
      <tr>
        <td class="left">メールアドレス</td>
        <td class="right">{{$contact->email}}
          <input type="hidden" name="email" value="{{$contact->email}}">
        </td>
      </tr>
      <tr>
        <td class="left">お電話番号</td>
        <td class="right"> {{ $contact->tel1 }} - {{$contact->tel2}} -{{$contact->tel3}}
            <input type="hidden" name="tel" value="{{ $contact->tel }}">
        </td>
      </tr>
      <tr>
        <td class="left">お問い合わせ内容</td>
        <td class="right">
            @foreach($contact->contents as $content)  
            {{ $content }}</br>
            @endforeach

            @foreach($contact->content_ids as $id)
              <input type="hidden" name="content_id[]" value="{{ $id }}">
            @endforeach

            @if($contact->other_content)
              <input type="hidden" name="other_content" value="{{ $contact->other_content}}">
            @endif
        </td>
      </tr>
    </table>
  </div>
  <button class="comp-button" type="submit" >確定する</button>
</form>
<div>
@endsection