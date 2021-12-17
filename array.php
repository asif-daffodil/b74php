<?php 
    // indexed array
    $city = array('Dhaka', 'Khulna', 'Rongpur', 'Cumilla');

    echo $city[3]."<br>";
    echo "<pre>";
    print_r($city);
    echo "</pre>";

    $person = ['Sams Roamana', 23, 'Dhaka', 'Female', true];
    echo "<pre>";
    print_r($person);
    echo "</pre>";

    $person[] = "Married";
    echo "<pre>";
    print_r($person);
    echo "</pre>";

    echo count($person)."<br>";

    echo $person[0]." ".$person[1]." ".$person[2]." ".$person[3]." ".$person[4]." ".$person[5]."<br>";

    $x = 0;
    while ($x < count($person)) {
        echo $person[$x]." ";
        $x++;
    }

    echo "<br>";
    $j = count($person);
    for ($i=0; $i < $j; $i++) { 
        echo $person[$i]." ";
    }

    echo "<br>";

    foreach ($person as $item) {
        echo $item." ";
    }

    //Associative array
    $student = ['name' => 'Asif Abir', 'age' => 35, 'city' => 'Dhaka', 'gender' => 'Male', 'sStatus' => false];
    echo $student['name']."<br>";
    $student['mStatus'] = "Married";
    echo "<pre>";
    print_r($student);
    echo "</pre>";
    echo count($student)."<br>";
    foreach ($student as $iName => $sData){
        if($iName == "sStatus"){$iName = "Student Stutus";}
        if($iName == "mStatus"){$iName = "Marital status";}
        if($sData == null){$sData = "Not Student";}
        echo ucwords($iName)." : ".$sData."<br>";
    }

    echo "<br>";

    $x = ['Name' => 'Takla Murad', 'Age' => 60];
    foreach($x as $key => $value){
        echo $key." : ".$value."<br>";
    }

    // multi-dimontional array
    $students = [
        ['Pranto', 'Male', "Dhaka"],
        ['Reza', 'Male', "Dhaka"],
        ['Tanvir', 'Male', "Dhaka"],
        ['Haider', 'Male', "Dhaka"],
        ['Mostafizur', 'Male', "Bangladesh"]
    ];
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    echo $students[4][2]."<br>";
    echo count($students)."<br>";

    for ($a=0; $a < count($students); $a++) { 
       for ($b=0; $b < count($students[$a]); $b++) { 
           echo $students[$a][$b]." ";
       }
       echo "<br>";
    }

    echo "<br>";

    foreach($students as $stData){
        foreach($stData as $data){
            echo $data." ";
        }
        echo "<br>";
    }

    echo "<br>";

    $programers = [
        'name' => ['Pranto', 'Reza', 'Tanvir', 'Haider', 'Mostafizur', 'Roamana', 'Asif'],
        'age' => [24, 34, 32, 30, 28, 23, 35],
        'gender' => ['Male', 'Male', 'Male', 'Male', 'Male', 'Female', 'Male'],
        'city' => ['Jhinaidah', 'Barishal', 'Dhaka', 'Dinajpur', 'Rongpur', 'Naogoan', 'Barishal'],
    ];
    
    echo "<pre>";
    print_r($programers);
    echo "</pre>";

    echo $programers['city'][2]."<br>";

    foreach($programers as $programer){
        foreach($programer as $Data){
            echo $Data." ";
        }
        echo "<br>";
    }
    echo "<br>";

    for ($k=0; $k < 7; $k++) {
        foreach($programers as $haha => $test){
            echo ucwords($haha)." : ".$test[$k]."<br>";
        }
        echo "<br>";
    }
?>