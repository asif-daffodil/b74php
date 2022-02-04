<?php 
    class MyClass {
        public string $myString = "This is a string";
        public const message = "This is a message";
        public function MyFunc ()
        {
            $this->myString = "This is another string";
            // $this->message = "ha ha ha";
        }
        public function __construct()
        {
            $this->myString = self::message;
            // MyClass::message = "ha ha ha";
        }
        
    }

    $obj = new MyClass;
    // $obj->MyFunc();
    echo $obj->myString."<br>";
    echo $obj::message."<br>";
?>