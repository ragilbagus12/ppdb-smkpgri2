<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

// Gunakan require (bukan require_once) supaya tidak return `true`
// saat container di-reuse pada request berikutnya
$app = require __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());