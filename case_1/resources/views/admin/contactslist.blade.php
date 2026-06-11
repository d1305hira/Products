<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/admin/contactslist.css')}}">
</head>
<body>
  <div class="container">
    <h1>お問い合わせ一覧</h1>
    <div class="contacts_list">
      <div class="csv_output">
        <a href="{{route('contacts.csv')}}">CSVを出力する</a>
      </div>
      <table>
        <thead>
          <tr>
            <th>問い合わせ日</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>問い合わせ内容</th>
            <th>その他詳細</th>
          </tr>
        </thead>
        <tbody>
          @foreach($contacts as $contact)
          <tr>
            <td>{{$contact->created_at->format('Y年m月d日')}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->tel}}</td>
            <td>@foreach($contact->contents as $item)
                  {{$item->content}}
                @endforeach
            </td>
            <td>@if($contact->other_content)
                  {{$contact->other_content}}
                @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>