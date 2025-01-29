<?php
    class Fruit{
        public $name;
        public $color;

        public function __construct($name,$color)
        {
            $this->color=$color;
            $this->name=$name;
        }

        public function get_info()
        {
            return $this->name . " " . $this->color . " ";
        }
    }

    class Apple extends Fruit{
        public $weight=60.5;
        public function showDetails()
        {
            echo "<h1>" . $this->get_info() . $this->weight . "</h1>";
        }
    } 

    $apple=new Apple("mango","orange"); 
    $apple->showDetails();
?>