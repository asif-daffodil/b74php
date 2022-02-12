<?php 
    namespace mainNav;
    include_once("./classes/db.php");
    use db\db;
    new db;
    class nav {
        private function __construct()
        {
            return;
        }
        public static function query($query) {
             return db::$conn->query($query);
        }   
    }
?>