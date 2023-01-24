<!DOCTYPE html>
<html>
<body>

<h1>Learn String</h1>

<?php
    // Ref Docs : https://www.php.net/manual/en/book.strings.php

    $str = "Kamu Hai Kamu";
    echo strtolower($str);
    echo "<br>";

    echo strtoupper("ini bakal besar semua");
    echo "<br>";

    // get string length
    echo strlen($str);
    echo "<br>";

    // reverse string
    echo strrev($str);
    echo "<br>";

    /* 
        strpos(string $haystack, string $needle, int $offset = 0): int|false
    
        find index of first occurence of $needle in $haystack
    */
    echo strpos($str, "Kamu");
    echo "<br>";

    /* 
        str_replace(array|string $search, array|string $replace, 
            string|array $subject, int &$count = null): string|array

        replace every $search in $subject into $replace
    */
    echo str_replace("amu", "imu", $str);
    echo "<br>";

    // substr(string $string, int $offset, ?int $length = null): string
    echo substr($str, 2, 5);
    echo "<br>";

    /* 
        explode(string $separator, string $string, int $limit = PHP_INT_MAX): array

        split string into array
    */
?>

</body>
</html>