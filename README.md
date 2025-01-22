# お問い合わせフォーム

## 環境構築

### Dockerビルド
1. git clone git@github.com:coachtech-material/laravel-docker-template.git
2. docker compose up -d --build

### laravel環境構築
1. docker compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generete
5. php artisan migrate
6. php artisan db:seed

## 使用技術
- PHP 7.4.9
- laravel *v8.83.8
- MySQL 15.1

## ER図
https://drive.google.com/file/d/1aMqymGcUA_vOBQiBDwsnW81g6sAW65zB/view?usp=sharing

## URL
- 環境開発：http://localhost
- phpMyadmin：http://localhost:8080/
