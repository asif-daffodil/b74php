<?php

class myClass {
        public string $country1 = "Bangladesh";
        protected string $country3 = "Pakistan";
        private string $country2 = "India";

        public function myFunc1() {
            return $this->country3;
        }

        public function myFunc2() {
            return $this->country2;
        }
    }

    $obj = new myClass;

    echo $obj->country1."<br>";
    // echo $obj->country3."<br>";
    // echo $obj->country2."<br>";
    echo $obj->myFunc1()."<br>";
    echo $obj->myFunc2()."<br>";

class yourClass extends myClass {
        public function yourFunc () {
            return $this->country3;
        }
    }

    $obj2 = new yourClass;
    echo $obj2->yourFunc();

?>