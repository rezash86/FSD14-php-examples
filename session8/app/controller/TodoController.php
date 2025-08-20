<?php
require_once __DIR__.'/../models/Todo.php';

class TodoController{
    
    public function index(){
        //show a list of todos
        $todoModel = new Todo();
        $tasks = $todoModel->getAll();
        include __DIR__.'/../views/todo/index.php';
    }
}

?>