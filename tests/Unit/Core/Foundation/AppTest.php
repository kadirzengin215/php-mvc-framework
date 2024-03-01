<?php

declare(strict_types=1);

use Core\Foundation\App;
use Core\Foundation\Interfaces\AppInterface;

test('Get instance of application', function () {
    $app = new App(__DIR__);

    expect($app)->toBeInstanceOf(AppInterface::class);
});

test('Get base path of application', function () {
    $app = new App(__DIR__);

    expect($app->getBasePath())->toBe(__DIR__.DIRECTORY_SEPARATOR);
});

test('Change base path of application', function () {
    $app = new App(__DIR__);

    $app->setBasePath(__DIR__.'/root');

    expect($app->getBasePath())->toBe(__DIR__.DIRECTORY_SEPARATOR.'root'.DIRECTORY_SEPARATOR);
});
