<?php

require_once '../core/Model.php';
require_once '../core/Controller.php';

// Default
$url = isset($_GET['url']) ? $_GET['url'] : 'home/index';

$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . "Controller";
$method = $url[1] ?? 'index';

require_once "../app/controllers/$controllerName.php";

$controller = new $controllerName();

call_user_func_array([$controller, $method], []);



