<?php
declare(strict_types=1);

// require_once __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if (file_exists($path)) {
        require_once $path;
    }
});

use App\Test;

Test::test('Hello, World!');