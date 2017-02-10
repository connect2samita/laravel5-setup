# Auth-Profile
Auth Profile is a web application setup using Laravel 5.

# Installation
Step 1: Clone repository and install dependencies or libraries

  git clone https://github.com/connect2samita/Auth-Profile.git

  composer update

Step 2: Configure project name in "app.php" file located inside "project_root/config/"

  'name' => 'Auth Profile',

Step 3: Create a database in mysql

  CREATE DATABASE authprofile;

Step 4: Configure project to use local or remote database.

For local configuration edit "project_root/.env"

  DB_DATABASE=database_name
  DB_USERNAME=mysql_username
  DB_PASSWORD=mysql_password

or For remote configuration edit "project_root/config/database.php"

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

Step 5: Install and Run migration from command line. Open "project_root/" in terminal and Run

  php artisan migrate:install

  php artisan migrate

Step 6: Start the Local Development Server

  php artisan serve
