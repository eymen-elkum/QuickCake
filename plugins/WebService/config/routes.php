<?php
use Cake\Routing\Router;

Router::plugin('WebService', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
