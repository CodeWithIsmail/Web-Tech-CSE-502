<?php
    class Person{
        public $firstname;
        public $lastname;
        public $address;
        
        function __construct($firstname,$lastname,$address)
        {
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->address=$address;
        }
        function __destruct()
        {
            echo "<br> the person class has been destructed";
        }
        function set_first_name($firstname)
        {
            $this->firstname=$firstname;
        }
        function get_first_name()
        {
            return $this->firstname;
        } 
    }

    $person1=new Person("james","bond","CA");
    echo $person1->firstname . " " . $person1->lastname . "<br>";
?>