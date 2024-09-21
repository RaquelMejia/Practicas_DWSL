<?php
require_once 'config/config.php';
require_once 'controller/HomeController.php';
require_once 'routes/Router.php';

// Configurar el router
$router = new Router('/practica%205'); // Asegúrate de que la barra esté al inicio





$router->get('/', 'HomeController@index');



$router->run();
