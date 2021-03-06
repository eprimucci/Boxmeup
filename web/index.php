<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';

require __DIR__ . sprintf('/../config/%s.php', getenv('APPLICATION_ENV') ?: 'prod');

$app->run();
