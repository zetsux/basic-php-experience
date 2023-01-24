<?php

    // Looping
    for ($i = 0; $i < 5 ; $i++){
        echo "$i";
    }
    echo "<br>";

    $idx = 0;
    while ($idx < 5){
        echo "$idx";
        $idx++;
    }
    echo "<br>";

    $idx = 0;
    do {
        echo "$idx";
        $idx++;
    } while ($idx < 5);
    echo "<br>";

    //Conditional
    $n = 1;

    if ($n === 1) {
        echo "$n is an integer with value 1<br>";
    } else if ($n == 1) {
        echo "$n is a variable with value 1<br>";
    } else {
        echo "$n's value is not 1<br>";
    }

    switch($n) {
        case 1:
            echo "$n is 1<br>";
            break;
        case 2:
            echo "$n is 2<br>";
            break;
        case 3:
            echo "$n is 3<br>";
            break;
        default:
            echo "$n is neither 1, 2, nor 3<br>";
            break;
    }
?>