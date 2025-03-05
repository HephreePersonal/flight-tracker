<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/eloquent.php';

// Include all migration files
foreach (glob(__DIR__ . '/migrations/*.php') as $filename) {
    require_once $filename;
}
