<?php
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Seeds\ContactSeeder;

require __DIR__ . '/vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Initialize Eloquent
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => $_ENV['DB_CONNECTION'],
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_DATABASE'],
    'username'  => $_ENV['DB_USERNAME'],
    'password'  => $_ENV['DB_PASSWORD'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the Capsule instance as global
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Run the seeder
$seeder = new ContactSeeder();
$seeder->run();

echo "Database seeded successfully.";
