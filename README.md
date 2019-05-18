# Laravel v5 ![GitHub followers](https://img.shields.io/github/followers/connect2samita.svg?style=social)
A web application set up using Laravel PHP Framework v5. Features included in starter kit include  Authentication, User Profile etc.

![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/connect2samita/laravel5-starterkit.svg?color=green) ![GitHub All Releases](https://img.shields.io/github/downloads/connect2samita/laravel5-starterkit/total.svg) ![GitHub Release Date](https://img.shields.io/github/release-date/connect2samita/laravel5-starterkit.svg) ![GitHub](https://img.shields.io/github/license/connect2samita/laravel5-starterkit.svg)

## Installation
#### Step 1: Get Started
First, clone this respository and install all laravel dependencies and libraries.
```    
$ git clone https://github.com/connect2samita/laravel5-setup.git
$ composer install
$ php artisna key:generate
```

#### Step 2: Configure project name
Change default project name in *app.php* file located inside *project_root/config/* folder.
```name' => 'Laravel v5',```

#### Step 3: Create a database in mysql
Now, create a database manually using PHP MyAdmin or using mysql. Run commands to create database using mysql.
```
$ mysql --user=user_name --password
Enter password: your_password
$ CREATE DATABASE database_name;
```
#### Step 4: Configure project database.
Local database configuration edit *project_root/.env*.
```
    DB_DATABASE=database_name
    DB_USERNAME=mysql_username
    DB_PASSWORD=mysql_password
```
or For remote database configuration edit *project_root/config/database.php*.
```
    'mysql' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'database_name'),
        'username' => env('DB_USERNAME', 'mysql_username'),
        'password' => env('DB_PASSWORD', 'mysql_password'),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => null,
    ],
```

#### Step 5: Install and Run migration from command line. Open "project_root/" in terminal and Run
Now install migrate to create and update tables from laravel. To install migrate, open terminal and run command in *project_root/* folder.
```
$ php artisan migrate:install
```
To migrate any updates after installation run command in *project_root/* folder.
```
$ php artisan migrate
```

#### Step 6: Host Project
To serve project on your local machine or localhost. Run command in *project_root/* folder.
```
$ php artisan serve
```
