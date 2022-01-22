<?php

class myClass {
        protected string $p1 = "Bangladesh";
    }

    class yourClass extends myClass {
    public function yourFunc () {
            return $this->p1;
        }
    }

    $obj = new yourClass;
    echo $obj->yourFunc();

?>