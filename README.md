# Student ID
* 2010076203

# Installation
* __Clone jobPortal__

```
git clone https://github.com/sohag1426/jobPortal.git
```

* __set public directory as DocumentRoot__

* __cd to jobPortal__

* __Install Composer Dependencies__

```
composer install
```

* __Install NPM Dependencies__

```
npm install
npm run dev
```

* __Create a copy of your .env file__

```
cp .env.example .env
```

* __Generate an app encryption key__

```
php artisan key:generate
```

* __Create an empty database for the application__

* __In the .env file, add database information to allow Laravel to connect to the database__

* __Migrate the database__

```
php artisan migrate
```

* __Seed the database__

```
php artisan db:seed
```

* __set laravel write pemissions__

```
chown -R www-data:www-data storage/
chown -R www-data:www-data bootstrap/cache/
```
* __Default Admin User__
```
Email: admin@example.com
Password: admin
```
