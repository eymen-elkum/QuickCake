<?php

use WebService\Routing\Filter\ServiceFilter;
use Cake\Routing\DispatcherFactory;
use Cake\Routing\Router;

DispatcherFactory::add(new ServiceFilter());

//Routing statements.
/*Router::extensions(['json', 'xml']);

Router::connect('/api/:controller', ['_ext' => 'json'], []);
Router::connect('/rest/:controller', ['_ext' => 'json'], []);
Router::connect('/:controller-:id', ['action' => 'view'], ['id' => '[0-9]+', 'pass' => ['id']]);*/
