<?php
 // para que se desplieguen los errores
ini_set('display_errors',1);
ini_set('display_starup_error',1);
error_reporting(E_ALL);
    // para requerir cualquiera de los archivos
require_once('../vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
use Respect\Validation\Validator as v; // mettodo validador
use Illuminate\Support\Facades\Redirect;

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

session_start();


$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
    // creando las rutas de la aplicación
$map->get('index', '/proyectos/', [
    'controller' => 'app\Controller\IndexController',
    'action' => 'indexAction'
]);

$map->get('addJobs', '/proyectos/jobs/add', [
    'controller' => 'app\Controller\JobsController',
    'action' => 'addJob'
]);

$map->post('saveJobs', '/proyectos/jobs/add', [
    'controller' => 'app\Controller\JobsController',
    'action' => 'addJob'
]);


$map->get('addUser', '/proyectos/user/add', [
    'controller' => 'app\Controller\UserController',
    'action' => 'addUser'
]);

$map->post('saveUser', '/proyectos/user/add', [
    'controller' => 'app\Controller\UserController',
    'action' => 'addUser'
]);

$map->get('loginForm', '/proyectos/login', [
    'controller' => 'app\Controller\AuthController',
    'action' => 'getLogin'
]);

$map->post('auth', '/proyectos/auth', [
    'controller' => 'app\Controller\AuthController',
    'action' => 'postLogin'
]);

$map->get('admin', '/proyectos/admin', [
    'controller' => 'app\Controller\AdminController',
    'action' => 'getIndex',
    'auth' => true
]);

$map->get('logout', '/proyectos/logout', [
    'controller' => 'app\Controller\AuthController',
    'action' => 'getLogout',
]);




$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if (!$route) {
    
    echo 'No route';
} else {
    $handlerData = $route->handler;
    $actionName = $handlerData['action'];
    $controllerName = $handlerData['controller'];
    $needAuth = $handlerData['auth'] ?? false;

    $sessionTrue = $_SESSION['userId'] ?? null;

    if($needAuth && !$sessionTrue){
        $actionName = 'getLogout';
        $controllerName = 'app\Controller\AuthController';

        echo "ruta prohibida";
    }


    $controller = new $controllerName;
   $response = $controller->$actionName($request);

   foreach ($response->getHeaders() as $name => $values) {
        foreach ($values as $value) {
            header(sprintf('%s:%s', $name, $value), false);
        }
    }
    echo $response->getBody();
}





