    <?php
    class Index {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function index() {
            include 'views/index/index.php';  
        }
    }
    ?>
