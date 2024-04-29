<?php
function indexController($db) {

    $title = "Accueil";

    require_once 'models/Include.php';
    includeMeta($title); 
    includeNav();    
    include 'views/index/index.php';
    includeFooter();     
}
?>
