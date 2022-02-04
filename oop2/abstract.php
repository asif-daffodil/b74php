<?php

abstract class MyClass {
        public string $bikeName;
        public function __construct($name)
        {
            $this->bikeName = $name;
        }
        abstract public function MyBike();
    }

    class MyChild1 extends MyClass {
        public function MyBike () {
            return "My Bike name is ".$this->bikeName;
        }
    }

    // $obj = new MyClass("rtr 4v");
    $obj1 = new MyChild1("rtr 4v");
    echo $obj1->MyBike()."<br>";


    class YourBike extends MyClass {
        public function MyBike () {
            return "Your Bike name is ".$this->bikeName;
        }
    }
    $obj2 = new YourBike("FZS");
    echo $obj2->MyBike()."<br>";

?>