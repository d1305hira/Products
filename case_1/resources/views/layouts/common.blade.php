<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>A事務所</title>
 <link rel="stylesheet" href="{{ asset('css/common.css') }}">
 @yield('css')
</head>

<body>
    <header>
      <div class="header-content">
        <div class="header-title">A事務所</div>
        <div class="header-link">
          <nav>
            <a href="{{ route('home') }}" class="home">ホーム</a>
          </nav>
          <nav>
            <a href="{{ route('contents') }}" class="contents-link">取り扱い業務</a>
          </nav>
          <nav>
            <a href="{{ route('access') }}" class="access-link">アクセス</a>
          </nav>
          <nav>
            <a href="{{ route('contact') }}" class="contact-link">お問い合わせ</a>
          </nav>
        </div>
      </div>
    </header>

    <main>
      @yield('content')
    </main>

    <footer> 
      <div class="footer-credit">          
        <div class="footer-logo">
          A事務所
        </div>
        <div class="contact-information">
          〒111-1111 京都府○○○</br>
          電話番号:0123-45-6789　FAX:0123-45-6789
        </div>
      </div>
    </footer>
</body>
</html>