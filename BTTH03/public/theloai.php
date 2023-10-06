<?php
require_once('../app/config/config.php');
$controll = isset($_GET['controller'])?$_GET['controller']:'category';
$action = isset($_GET['action'])?$_GET['action']:'theloai';
$controller = ucfirst($controll);
$controllers = $controller . "Controller";
$controllerPath = '/app/controllers/' . $controllers . '.php';

require_once(APP_ROOT . $controllerPath);
$objController = new $controllers();
$objController->$action();

?>