<?php
function articleController($db) {
    require_once 'models/Include.php';
    require_once 'models/Article.php';
    $articleModel = new Article($db);
    $articles = $articleModel->getAllArticles();
    include 'views/article/index.php'; 
}
?>
