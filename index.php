<?php
require_once 'config/config.php';

function getDB() {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

spl_autoload_register(function ($class_name) {
    require_once 'controller/' . $class_name . '.php';
});

$request = trim($_SERVER['REQUEST_URI'], '/');
$request = trim(str_replace(BASE_URL, '', $request), '/'); // Utilisation de BASE_URL

if (empty($request)) {
    $request = 'index';  
}

$controllerPath = __DIR__ . '/controller/' . ucfirst($request) . '.php';
$viewPath = __DIR__ . '/views/' . $request . '/index.php';

if (file_exists($controllerPath) && file_exists($viewPath)) {
    require $controllerPath;  
    $controllerClass = ucfirst($request);
    $controller = new $controllerClass(getDB()); 
    $controller->index();  
} else {
    http_response_code(404);
    require __DIR__ . '/views/404/index.php';  
}
?>
