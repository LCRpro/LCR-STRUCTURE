<?php
function portfolioController($db) {

    $title = "Portfolio";

    require_once 'models/Include.php';
    includeMeta($title); 
    includeNav();    
    include 'views/portfolio/index.php';
    includeFooter();     
}
?>
