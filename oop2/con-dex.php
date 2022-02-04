<?php  
    class conDes {
        public function __construct()
        {
            return $this->yourFunc();
        }

        public function myFunc()
        {
            echo "<br>ha ha ha</br>";
        }

        public function yourFunc()
        {
            echo "ho ho ho";
        }

        public function __destruct()
        {
            return $this->yourFunc();
        }

    }

    $obj = new conDes;
    $obj->myFunc();

?>