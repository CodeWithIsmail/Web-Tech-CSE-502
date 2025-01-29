<?php
    abstract class Fruit{
        abstract public function show();
        abstract public function taste($taste);
    }

    class Apple extends Fruit{
        public function show()
        {
            echo "i am an apple" . "<br>";
        }
        public function taste($taste)
        {
            echo "<h1>" . "it tastes very " . $taste . "</h1>";
        }
    }

    class Orange extends Fruit{
        public function show()
        {
            echo "i am an orange" . "<br>";
        }
        public function taste($taste,$when=10)
        {
            echo "<h1>" . "it tastes very " . $taste . $when . "</h1>";
        }
    }

    $apple=new Apple();
    $orange=new Orange();
    $apple->show();
    $orange->show();

    $apple->taste("sweet");
    $orange->taste("sour");
    $orange->taste("sour",100);
?>