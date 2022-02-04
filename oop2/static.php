<?php  
    class bdClass {
        public static string $bd = "Banngladesh";
        public const msg = "This is a message";

        public static function capital ($city, $country) : string {
            return "$city is the capital of $country";
        }

        private function __construct()
        {
            return null;
        }
    }

    echo bdClass::$bd."<br>".bdClass::capital(country:"Bangladesh", city:"Dhaka")."<br>".bdClass::msg;
?>