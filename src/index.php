<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'let-s-go-home' => array(
    'controller' => 'Portfolio',
    'action' => 'index'
  ),
  'hello-i-am-bavo' => array(
    'controller' => 'Portfolio',
    'action' => 'about'
  ),
  'hi' => array(
    'controller' => 'Portfolio',
    'action' => 'contact'
  ),
  'i-made-this' => array(
    'controller' => 'Portfolio',
    'action' => 'work'
  )
);

if(empty($_GET['bavo-says'])) {
  $_GET['bavo-says'] = 'let-s-go-home';
}
if(empty($routes[$_GET['bavo-says']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['bavo-says']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
