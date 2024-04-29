<?php
class Error {
  

    public function index() {
        $title = "Accueil";

        require_once 'models/Include.php';
        includeMeta($title); 
        includeNav();    
        include 'views/404/index.php';
        includeFooter();   
    }
}
?>
