<?php 
    // Ref Docs : https://www.php.net/manual/en/book.datetime

    /* 
        date(string $format, ?int $timestamp = null): string

        [format]
        l = day, d = date, M = month(short word), m = month(number), Y = year, etc

        (Ref Docs : https://www.php.net/manual/en/datetime.format.php)
    */
    echo date('l, jS \of F Y h:i:s A') . "<br>";

    /*
        time(): int

        returns UNIX Timestamp / Epoch Time (number of seconds passed since January 1st, 1970),
        used to get current timestamp or to get a timestamp of any time by 
        adding/subtracting some seconds in order to get the wanted timestamp

        Note : Timestamp of the start of the request is available in $_SERVER['REQUEST_TIME'].
    */
    echo time();
    echo "<br>";

    /*
        mktime(int $hour, ?int $minute = null, ?int $second = null, ?int $month = null,
            ?int $day = null, ?int $year = null): int|false

        returns a custom UNIX Timestamp / Epoch Time according to the 6 parameters given.
    */
    echo mktime(0, 0, 0, 9, 26, 2001);
    echo "<br>";

    /* 
        strtotime(string $datetime, ?int $baseTimestamp = null): int|false

        returns a custom UNIX Timestamp / Epoch Time according to the string given.
        (start from baseTimestamp, from January 1st, 1970 if not given)

        Format Ref Docs : https://www.php.net/manual/en/datetime.formats.php
    */
    echo strtotime("28 Feb 2009");
    echo "<br>";

    echo "<hr>";
    // date() + time() usage example :
    echo date('l, jS \of F Y h:i:s A', time()) . "<br>"; //= show current time
    echo date('l, jS \of F Y h:i:s A', time() + (2*24*60*60)). "<br>"; //= show the time of exactly 2 days from current time
    echo date('l, jS \of F Y h:i:s A', time() - (7*24*60*60)). "<br>"; //= show the time of exactly 1 week before current time

    echo "<hr>";
    // date() + mktime() usage example :
    echo date('l, jS \of F Y h:i:s A', mktime(0, 0, 0, 9, 26, 2001)) . "<br>"; //= show the time of 00:00:00 26 September 2001;

    echo "<hr>";
    // date() + strtotime() usage example :
    echo date('l, jS \of F Y h:i:s A', strtotime("28 Feb 2009")) . "<br>"; //= show the time of 28 February 2009;
?>