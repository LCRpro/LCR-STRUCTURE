<?php
require_once 'config/config.php';

function getDB() {
    try {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }
}

$request = trim($_SERVER['REQUEST_URI'], '/');
$request = trim(str_replace(BASE_URL, '', $request), '/'); 

if (empty($request)) {
    $request = 'index';  
}

$controllerPath = __DIR__ . '/controller/' . ucfirst($request) . '.php';
$viewPath = __DIR__ . '/views/' . $request . '/index.html';

if (file_exists($controllerPath) && file_exists($viewPath)) {
    require $controllerPath;  
    $controllerFunction = $request . 'Controller';
    if (function_exists($controllerFunction)) {
        $controllerFunction(getDB()); 
    } else {
        http_response_code(404);
        require __DIR__ . '/views/404/index.php';
    }
} else {
    http_response_code(404);
    require __DIR__ . '/views/404/index.php';  
}
?>
