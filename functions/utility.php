<?php
    // var_dump(var) -> output the value and type of a variable
    $i = 0;
    echo var_dump($i) . "<br>";

    // isset(var) -> determine if a variable is declared and not null
    if(isset($i)) echo "true<br>";
    else echo "false<br>";
    if(isset($var)) echo "true<br>";
    else echo "false<br>";

    // empty(var) -> determine if a variable is empty
    $var;
    if(empty($i)) echo "true<br>";
    else echo "false<br>";
    if(empty($var)) echo "true<br>";
    else echo "false<br>";

    // die() -> stop program (like return)

    // sleep(int $seconds): int -> stop program for a specified amount of seconds
?>