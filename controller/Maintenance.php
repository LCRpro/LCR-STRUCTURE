<?php
function maintenanceController($db) {

    $title = "Maintenance";

    require_once 'models/Include.php';
    includeMeta($title); 
    includeNav();    
    include 'views/maintenance/index.php';
    includeFooter();     
}
?>
