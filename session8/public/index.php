<?php
session_start();
require_once '../config/config.php';
require_once '../app/middleware/AuthMiddleware.php';

//we control which Controller will be called here
$page= $_GET['page'] ?? 'todo';
$authMiddleware = new AuthMiddleware();

switch($page){
    case 'login':
        require_once '../app/controller/AuthController.php';
        //we do the login.
         $controller = new AuthController();
         $controller -> login();
        break;

    case 'logout':
        require_once '../app/controller/AuthController.php';
        $controller = new AuthController();
         $controller -> logout();
        break;
    default:
        $authMiddleware->handle();
        require_once '../app/controller/TodoController.php';
        $controller = new TodoController();
        $controller-> index();
        // (new TodoController())-> index();
        break;
    }
?>