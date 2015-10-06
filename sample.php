<?php
    echo "Hello World";

    echo "<br>";    
 
    $firstname = "shinya";
    echo $firstname;

    echo "<br>";

    $lastname = "hirai";
    $fullname = $firstname.$lastname;
    echo $fullname;
    
    $age = 25;
    
    $pie = 3.1415926535;

    $flag = false; // true

    $members = array("tencho", "hiro", "natsu", "hina", "ko", "shinnosuke");

    echo $members[2];

    $devices = array("Apple" => "iPhone", "Google" => "Android", "Microsoft" => "Windows Phone");

    echo "<br>";
    echo $devices["Microsoft"];


    $dice = 1;

    if ($dice == 1) {
        echo "<br>";
        echo "ok";
    } else if ($dice == 2) {
        echo "<br>";
        echo "ok2";
    } else {
        echo "<br>";
        echo "NG";
    };

    $countmembers = count($members);
    echo "<br>";
    echo $countmembers;

    for ($i = 0; $i < $countmembers; $i++) {
        // 処理
        echo "<br>";
        echo $i."人目 : ".$members[$i];
    };




?>
