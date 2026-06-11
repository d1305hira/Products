@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
  <div class="page-con">
    <h1 class="top">お問い合わせ</h1>
    <p>お問い合わせ内容をご記入ください。</p>
    <div class='each-con'>
    <form action="{{ route('confirm') }}" method="post">
        @csrf
        <div class="form-group">
          <table>
            <tr class="form-con-name">
              <td class="left">
                <label class="name">お名前</label>
              </td>
              <td class="right">
                <input type="text" class="input-name" name="name" value= "{{old('name')}}">
              @error('name')
              <span class="error">{{ $message }}</span>
              @enderror
              </td>
            </tr>
            <tr  class="form-con-mail">
              <td class="left">
                <label class="email">メールアドレス</label>
              </td>
              <td class="right">
                <input type="text" class="email_domain" name="email_domain" value="{{old('email_domain')}}" placeholder="sample">
                <span>@</span>
                <input type="text" class="email_tld" name="email_tld" value="{{old('email_tld')}}" placeholder="sample.com">
                @error('email')
                 <span class="error">{{ $message }}</span>
                @enderror
              </td>
            </tr>
            <tr class="form-con-tel">
              <td class="left">
                <label class="tel">お電話番号</label>
              </td>
              <td class="right">
                <input type="tel" class="tel1" name="tel1" value="{{old('tel1')}}">
                <span>-</span>
                <input type="tel" class="tel2" name="tel2" value="{{old('tel2')}}">
                <span>-</span>
                <input type="tel" class="tel3" name="tel3" value="{{old('tel3')}}">
                @error('tel')
                <span class="error">{{ $message }}</span>
                @enderror
              </td>
            </tr>
            <tr class="form-con">
              <td class="left">
                <div class="contact_contents">お問い合わせ内容</div>
              </td>
              <td class="right">
                @foreach($contents as $content)            
                <input type="checkbox" id="content_{{ $content->id }}" name="content_id[]" value="{{ $content->id }}" {{ is_array(old('content_id')) && in_array($content ->id ,old('content_id')) ? 'checked' : ""}}>           
                <label for="content_{{ $content->id }}" class="contents">{{$content->content}}</label>
                @endforeach
                <input type="checkbox" name="other_content_check" value="1">           
                <label class="other_content">その他</label>
              </td>
            </tr>
            <tr>
              <td class="left">
                <div class="input-detail">お問い合わせ詳細</div>
              </td>
              <td class="right">
                <textarea name="other_content" placeholder="お問い合わせ内容の詳細をご記入ください">{{ old('other_content') }}</textarea>
                @error('content_id')
                <span class="error">{{ $message }}</span>
                @enderror

                @error('other_content')
                <span class="error">{{ $message }}</span>
                @enderror
              </td>
            </tr>
          </table>
        </div>
      <button class="form-button" type="submit">内容を確定する</button>
    </form>
    </div>
  </div>
@endsection
      