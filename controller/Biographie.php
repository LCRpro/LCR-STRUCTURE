<?php
function biographieController($db) {

    $title = "Biographie";

    require_once 'models/Include.php';
    includeMeta($title); 
    includeNav();    
    include 'views/biographie/index.php';
    includeFooter();     
}
?>
