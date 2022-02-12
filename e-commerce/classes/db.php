<?php  
    namespace db;
    class db {
        private const host = "localhost";
        private const user = "root";
        private const pass = "";
        private const dbname = "ecommers74";
        public static $conn;
        public function __construct()
        {
            return self::$conn = mysqli_connect(self::host, self::user, self::pass, self::dbname);
        }

    }
?>