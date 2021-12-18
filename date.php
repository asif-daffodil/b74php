<?php  
    echo date('d/m/y')."<br>";
    echo date('d/M/Y')."<br>";
    date_default_timezone_set('Asia/Dhaka');
    echo date('d-F-Y h:i:s')."<br>";
    echo date('d-F-Y H:i:s a (w)')."<br>";
    echo date('d-F-Y H:i:s A (l)')."<br>";
    echo date_default_timezone_get()."<br>";

    // mktime
    // h m s m d y
    $myTime = mktime(0, 0, 0, 9, 10, 2025);
    echo date('d-F-Y h:i:s A (l)', $myTime)."<br>";

    //strtotime
    $tomorrow = strtotime("next day");
    echo date('d-F-Y h:i:s A (l)', $tomorrow)."<br>";

    $testTime = strtotime("+2 years +3 months -5 days");
    echo date('d-F-Y h:i:s A (l)', $testTime)."<br>";

    $startDate = strtotime("Friday");
    $endDate = strtotime("+6 weeks", $startDate);

    while ($startDate <= $endDate) {
        echo date('d-F-Y (l)', $startDate)."<br>";
        $startDate = strtotime("+1 weeks", $startDate);
    }
    
?>