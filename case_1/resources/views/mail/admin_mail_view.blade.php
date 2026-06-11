@component('mail::message')

下記のお問い合わせがありました。

---

**■ お名前**  
{{ $contact->name }}様

**■ メールアドレス**
{{ $contact->email}}

**■ お電話番号**
{{ $contact->tel }}  

**■ お問い合わせ内容**  
@foreach($contact->contents as $content)
{{ $content->content }}
@endforeach

@if($contact->other_content)
{{$contact->other_content}}
@endif
---

@endcomponent