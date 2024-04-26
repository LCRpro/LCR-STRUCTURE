<?php
class Contact {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        include 'views/contact/index.php'; 
    }
}
?>
