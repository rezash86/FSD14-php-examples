<?php

class Animal{
    public function speak(){
        return "Animal speaks";
    }

    public function special(){
        return "for only parents <br>";
    }
}

class Dog extends Animal{
    public function speak(){
        echo parent::special();
        return "Dog barks";
    }

}

$dog = new Dog();
echo $dog->speak();

?>