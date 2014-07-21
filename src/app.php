<?php

namespace Boxmeup\Web;

use Boxmeup\Web\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SecurityServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Boxmeup\Web\Provider\UserProvider;
use Boxmeup\Web\Provider\RepositoryServiceProvider;

$app = new Application();
$app->register(new UrlGeneratorServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new DoctrineServiceProvider());
$app->register(new SessionServiceProvider());
$app->register(new RepositoryServiceProvider());

// Authentication
$app->register(new SecurityServiceProvider(), [
    'security.firewalls' => [
	    'app' => [
	        'pattern' => '^/app',
	        'form' => [
	        	'login_path' => '/login',
	        	'check_path' => '/app/login_check',
	        	'always_use_default_target_path' => true,
            	'default_target_path' => '/app'
	        ],
	        'logout' => ['logout_path' => '/app/logout'],
	        'users' => $app->share(function() use ($app) {
	        	return new UserProvider($app['repo.user']);
	        })
	    ]
    ]
]);

// Mixins
$app->before(function ($request) {
    $request->getSession()->start();
});

return $app;
