<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>管理者登録</h1>

    <form method="post" action="/register">
      @csrf
      <div class="form-group">
        <div class="admin_name">
          <label for="name">管理者名</label>
          <input type="text" id="name" name="name" value="{{old('name')}}"> 
          @error('name')
          {{ $message}}
          @enderror
        </div>
        <div class="admin_email">
          <label for="email">管理者メールアドレス</label>
          <input type="email" id="email" name="email" value="{{old('email')}}">
          @error('email')
          {{$message}}
          @enderror
        </div>
        <div class="admin_pass">
          <label for="password">パスワード</label>
          <input type="password" id="password" name="password">
          @error('password')
          {{$message}}
          @enderror
        </div>
        <div class="admin_pass_confirm">
          <label for="password_confirmation">パスワード確認</label>
          <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="register">
          <button type="submit" class="retister_button">登録する</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>