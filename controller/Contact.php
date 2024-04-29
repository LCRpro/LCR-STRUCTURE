<?php
function contactController($db) {

    $title = "Contact";

    require_once 'models/Include.php';
    includeMeta($title); 
    includeNav();    
    include 'views/contact/index.php';
    includeFooter();     
}
?>
