<?php

require_once __DIR__ . '/../bootstrap/init.php';

$appName = getenv('APP_NAME');


use Illuminate\Database\Capsule\Manager as Capsule;

$user = Capsule::table('categories')->where('id', 1)->first();

var_dump($user);