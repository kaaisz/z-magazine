# docker-laravel

https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4

# Setup environment
## 1. clone repo
```$ git clone https://github.com/suzydp/docker-laravel.git```
## 2. build & up
```$ docker-compose up -d --build```
## 3. Check docker condition
```$ docker-compose ps```
## 4. Exec command from inside container
```$ docker-compose exec app ash```

if you want to exit, type `exit`

## 5. Install Composer
```# composer install```
## 6. generate .env inside laravel environment
```# cp .env.example .env```
## 7. Generate `APP_KEY` to disable error
```# php artisan key:generate```
## 8. Migrate latest database
```# php artisan migrate```
## 9. down
```$ docker-compose down```
