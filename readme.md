## NOTHING
    HOW TO

## Command


### 最常用
    php artisan migrate:refresh --seed
    php artisan clear-compiled
    php composer dump-autoload
    php composer update
    php phpunit


    php artisan migrate
    php artisan migrate:refresh
    php artisan migrate:rollback
    php artisan migrate:reset

    php artisan app:install
    php artisan app:update
    php artisan make:migration add_type_and_refer_to_users --table=users

    php artisan migrate

    php artisan db:seed

    composer dump-autoload


### 生成key
    php artisan key:generate

### 开启服务
    php artisan serve --port=88

### 常用表
    php artisan session:table
    php artisan queue:table
    php artisan queue:failed-table


    php artisan make:migration create_tasks_table --create=tasks
    php artisan make:model Task -m
    php artisan make:controller TaskController






### 策略
    php artisan make:policy PostPolicy

### 中间件
    php artisan make:middleware TaskMiddleware




### 创建种子
    php artisan make:seeder TaskTableSeeder
    php artisan db:seed [--class=TaskTableSeeder]



### 队列驱动表
    php artisan queue:listen
    php artisan make:job HardWork1 --queued


## Nginx

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
