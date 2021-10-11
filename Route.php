<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'funcionesphp.php';
require_once 'index.php';

if(isset($_GET['action'])){
    $action= $_GET['action'];
}else echo "ingrese algo";

$params = explode('/', $action);

switch ($params[0]) {
    case 'insert':
        insert();
    break;
    case 'home':
        home();
    break;
    default:
        home();
    break;
    
}
