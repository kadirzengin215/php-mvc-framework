<?php

declare(strict_types=1);

// Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the application
$app = require __DIR__.'/../app/Bootstrap/app.php';

// Run the application
$app->run();
