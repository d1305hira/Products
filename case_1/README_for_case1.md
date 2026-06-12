
## ■ case_1 セットアップ手順

### ① .env を作成
  cp .env.example .env

.env の主要設定（Sail + MySQL 用）
  DB_CONNECTION=mysql
  DB_HOST=mysql
  DB_USERNAME=sail
  DB_PASSWORD=password   ← .env.example のデフォルト
  QUEUE_CONNECTION=sync


### ② Composer のインストール（WSL 初回のみ）
  sudo apt update
  sudo apt install php php-cli php-mbstring php-xml php-curl php-zip unzip
  sudo apt install composer

### 依存関係インストール
  composer install


### ③ Sail を起動
  ./vendor/bin/sail up -d


### ④ APP_KEY を生成
  ./vendor/bin/sail artisan key:generate


### ⑤ 動作確認
  http://localhost
