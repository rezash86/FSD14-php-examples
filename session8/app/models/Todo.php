<?php
    class Todo{
        private $pdo;

        public function __construct()
        {
            $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        }

        public function getAll(){
            $stmt = $this->pdo->query("SELECT * FROM tasks");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>