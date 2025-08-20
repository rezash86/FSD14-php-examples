<?php
require_once __DIR__.'/../models/User.php';
class AuthController{
    
    public function login(){
        //you need check the FE and come back here with the post request
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $userModel = new User();
            $user_email = $_POST['email']; //it will be in the view
            $user_password = $_POST['password']; //it will be in the view
            
            if($userModel-> login($user_email, $user_password)){
                $_SESSION["user"] = $user_email;
                header("location: ". BASE_URL."/");
                exit;
            }
            else{
                $error = 'Invalid Credentials';
            }
           
        }
        include __DIR__.'/../views/auth/login.php';
    }

    public function logout(){
        session_destroy();
        header("location: ".BASE_URL. '/?page=login');
    }
}
?>