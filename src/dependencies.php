<?php

use DI\Container;
use Illuminate\Database\Capsule\Manager as Capsule;

return function (Container $container) {
    $settings = $container->get('settings');

    $capsule = new Capsule;
    $capsule->addConnection($settings['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    $container->set('db', function() use ($capsule) {
        return $capsule;
    });
};
