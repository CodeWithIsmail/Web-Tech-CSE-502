<?php
    class Fruit{
        public final function show_info()
        {
            echo "i am fruit" . "<br>";
        }
    }

    class Apple extends Fruit{
        // public function show_info()
        // {
        //     echo "i am apple" . "<br>";
        // }
    }

    $apple1=new Apple();
    $apple1->show_info();
?>