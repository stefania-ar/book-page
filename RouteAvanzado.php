<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once '_Controller/ControllerLibros.php';
require_once 'RouterClass.php';

$r= new Router();

$r->addRoute("home", "GET", "ControllerLibros", "home");
$r->addRoute("insert", "POST", "ControllerLibros", "insert");
$r->addRoute("show", "GET", "ControllerLibros", "show");



$r->setDefaultRoute("ControllerLibros", "home");

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

