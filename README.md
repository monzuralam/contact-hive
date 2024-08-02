# Contact Hive
A simple REST API-based contact list with a PHP slim framework.

## Requirements
- PHP 7.4 or Upper
- MySQL
- Composer

## Installation
- Clone this repository via `git clone https://github.com/monzuralam/contact-hive.git` and enter `contact-hive`.
- Open the terminal & run the command `composer install`.
- Copy `.env.sample` to `.env` and provide database credential.
- Ensure the MySQL server / phpMyAdmin is running and create a database `contact-hive`.
- Open the terminal & run the command `php migrate.php`.
- Now, open php webserver by `php -S localhost:8000 -t public`.
- Access in browser `localhost:8000` & open `postman` and make a `get` request `localhost:8000`. 

## Documentation
### Routes
