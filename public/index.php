<?php

ini_set('display_errors',1);
ini_set('display_starup_error',1);
error_reporting(E_ALL);

require_once('../vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'db_curso_php',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer(); // contenedor de ruta
$map = $routerContainer->getPath();
$map->get('index','/','../index.php'); // 1:el nombre de la ruta 2: url de la ruta 3: lo que vamos a devolver
$map->get('addJobs','/jobs/add','../addJob.php'); // 1:el nombre de la ruta 3: lo que vamos a devolver

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if(!route) {
    echo "No existe la ruta";
}else {
    var_dump($route);
}






