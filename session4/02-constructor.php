<?php

    class User{
       public string $name;
       
        //PHP does not support multiple constructor overloading
       public function __construct($name)
       {
            $this->name = $name;
            echo "the user is generated with $this->name <br>";
       }
       
       public function __destruct()
       {
         echo "user $this->name destroyed";
       }
    }

    $user = new User("John");


?>

