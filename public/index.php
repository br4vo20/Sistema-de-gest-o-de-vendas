<?php

use app\core\Router;

require '../vendor/autoload.php';

session_start();

// dd(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

Router::run();
