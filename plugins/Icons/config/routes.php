<?php
/*
 * Hi all
I have a case question, please:
I am working on a plugin named Icons, witch help me select an Icon from icons font list
the plugin works as the following: add input type 'icon'
set this type to the input
*/
use Cake\Routing\Router;

Router::plugin('Icons', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
