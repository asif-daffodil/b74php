<?php  
    class myClass {
        public string $area = "Dhanmondi";
        public int $age = 35;
        public array $skils = ['HTML', 'CSS', 'JS', 'PHP', 'MySQLi'];
        public bool $married = true;
        public float $experience = 10.36;

        public function myFunc () {
            return "Dhaka is the capital of Bangladesh";
        }
    }

    $myObj = new myClass;
    echo $myObj->area."<br>".$myObj->age."<br>";
    foreach ($myObj->skils as $skill){
        echo $skill." ";
    }
    echo "<br>".$myObj->married."<br>";
    echo $myObj->experience."<br>".$myObj->myFunc();
?>