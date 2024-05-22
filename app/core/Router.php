<?php

namespace app\core;

use app\support\RequestType;

class Router {

    
     
    public static function run(){

        $routesRegistered = new RoutersFilter;
        $routes = $routesRegistered->get();

        dd($routes);

    }
}