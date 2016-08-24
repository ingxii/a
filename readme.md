# NOTHING
    HOW TO

## Command

php artisan make:migration add_type_and_refer_to_users --table=users

php artisan migrate

php artisan db:seed

composer dump-autoload

## Nginx

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }