<?php 
    date_default_timezone_set('Asia/Jakarta');

    /* 
        Every parameter must be filled or an error will be given, unless there is a default value.
        To give default value, write =<value> after writing the parameter just like the $name below 
    */
    function greet($time, $name="Visitor") {
        $h = (int)date("H", $time);

        if ($h <= 10) {
            return "Morning, $name";
        } else if ($h <= 15) {
            return "Afternoon, $name";
        } else if ($h <= 18) {
            return "Evening, $name";
        } else {
            return "Night, $name";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Good <?= greet(time()) ?>!<h1>
    <hr>
    <h1>Good <?= greet(time(), "Rick") ?>!<h1>

</body>
</html>