<?php
    interface IShape{
        public function print_shape();
    }

    class Circle implements IShape
    {
        public function print_shape()
        {
            echo "i am circle" . "<br>";
        }
    }
    class Square implements IShape
    {
        public function print_shape()
        {
            echo "i am square" . "<br>";
        }
    }

    $circle=new Circle();
    $circle->print_shape();
    $square=new Square();
    $square->print_shape();
?>