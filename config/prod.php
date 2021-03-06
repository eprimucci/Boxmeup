<?php

$config = require 'environment.php';

// Release
$app['release'] = file_get_contents(__DIR__ . '/../release.txt');

// Twig templates
$app['twig.path'] = array(dirname(__DIR__) . '/templates');
$app['twig.options'] = array('cache' => '/tmp/bmu_cache_twig');

// DB connection
$app['db.options'] = [
    'driver' => 'pdo_mysql',
    'host' => $config['DB']['default']['host'],
    'dbname' => $config['DB']['default']['dbname'],
    'user' => $config['DB']['default']['user'],
    'password' => $config['DB']['default']['password'],
    'charset' => 'utf8'
];

// Session
$app['session.storage.save_path'] = '/tmp/bmu_sessions';
$app['session.storage.options'] = [
    'name' => '_BMU_SESS'
];

// Controllers
$app['controllers.path'] = __DIR__ . '/../src/Controller';
$app['controllers.namespace'] = '\Boxmeup\Web\Controller\\';

// Mount points
$app['mount.points'] = [
    '/app' => 'app',
    '/app/dashboard' => 'dashboard',
    '/app/user' => 'user',
    '/app/container' => 'container'
];

// Repositories
$app['repository.repositories'] = [
    'user' => 'Boxmeup\Repository\UserRepository',
    'container_item' => 'Boxmeup\Repository\ContainerItemRepository',
    'container' => [
        'Boxmeup\Repository\ContainerRepository',
        ['user', 'container_item']
    ],
    'location' => 'Boxmeup\Repository\LocationRepository'
];

// Converters
$app['converter.converters'] = [
    [
        'prefix' => 'container',
        'class' => 'Boxmeup\Web\Converter\ContainerConverter',
        'repo' => 'container'
    ]
];
