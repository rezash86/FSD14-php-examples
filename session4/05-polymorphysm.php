<?php
   class Shape{
    public function draw(){
        return "Drawing shape";
    }
   } 

   class Circle extends Shape{
    public function draw(){
        return "Drawing circle";
    }
   }

   class Square extends Shape{
    public function draw(){
        return "Drawing square";
    }
   }

   $shapes=[new Circle(), new Square()];
   foreach($shapes as $shape){
    echo $shape->draw() . "<br>";
   }
?>