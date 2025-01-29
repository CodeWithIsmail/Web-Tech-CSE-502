<?php
    class Person{
        public $firstname;
        public $lastname;
        public $address;

        function set_first_name($firstname)
        {
            $this->firstname=$firstname;
        }
        function get_first_name()
        {
            return $this->firstname;
        }
    } 

    $person1=new Person();
    $person1->set_first_name("james");
    echo $person1->get_first_name() . "<br>";
    $person1->lastname="bond";
    echo $person1->lastname;
?>