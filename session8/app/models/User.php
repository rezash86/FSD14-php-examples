<?php
    class User{
        private $pdo;

        public function __construct()
        {
            $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        }

        public function login($email, $password){
            $stmt = $this->pdo->prepare("SELECT * FROM users where email=? AND password=?");
            $stmt-> execute([$email, md5($password)]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>