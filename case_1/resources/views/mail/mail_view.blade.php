@component('mail::message')
{{$contact->name}} 様

お問い合わせありがとうございます。

以下の内容で受け付けました。

---

**■ お名前**  
{{ $contact->name }}様

**■ お問い合わせ内容**  
@foreach($contact->contents as $content)
{{ $content>content }}
@endforeach

@if(property_exists($contact, 'other_content') && $contact->other_content)
{{$contact->other_content}}
@endif
---

詳細については改めてお伺いさせていただきますので、
よろしくお願いいたします。

@endcomponent