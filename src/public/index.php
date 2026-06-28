<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/src/storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/src/vendor/autoload.php';  // ✅ era /../vendor/autoload.php

$app = require_once __DIR__.'/src/bootstrap/app.php';  // ✅ era /../bootstrap/app.php

$app->handleRequest(Request::capture());