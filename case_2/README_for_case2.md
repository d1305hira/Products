## ■ case_2 セットアップ手順

### ① .env を作成
cp .env.example .env

.env の主要設定（Docker Compose + Redis + WebSocket 用）
DB_CONNECTION=mysql
DB_HOST=mysql
DB_USERNAME=Laravel_user
DB_PASSWORD=laravel_pass

BROADCAST_DRIVER=redis
CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis

PUSHER_HOST=localhost
PUSHER_PORT=6001

VITE_PUSHER_HOST=localhost
VITE_PUSHER_PORT=6001
VITE_PUSHER_SCHEME=http


### ② Composer のインストール
composer install


### ③ Docker Compose を起動
docker-compose up -d
（または新構文）
docker compose up -d


### ④ APP_KEY を生成
docker compose exec php bash
php artisan key:generate


### ⑤ 動作確認
http://localhost

Laravel の初期画面が表示されれば成功。


### ※ 権限エラーが出る場合
docker compose exec php bash
chmod -R 777 storage bootstrap/cache
exit
