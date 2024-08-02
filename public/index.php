<?php

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Check for successful loading
if (!$_ENV['DB_CONNECTION']) {
    throw new RuntimeException('Failed to load environment variables');
}

// Instantiate PHP-DI ContainerBuilder
$containerBuilder = new ContainerBuilder();

// Set up settings
$settings = require __DIR__ . '/../src/settings.php';
$settings($containerBuilder);

// Build PHP-DI Container instance
$container = $containerBuilder->build();

// Create App instance
AppFactory::setContainer($container);
$app = AppFactory::create();

// Register dependencies
$dependencies = require __DIR__ . '/../src/dependencies.php';
$dependencies($container);

// Register routes
$routes = require __DIR__ . '/../src/routes.php';
$routes($app);

// Run the app
$app->run();

