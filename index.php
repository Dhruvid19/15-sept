<?php

$query = require 'bootstrap.php';


$router = new Router;

require 'routes.php';

require $router->direct(); 





