<?php 
    $var = "Roses are red";
    echo "This is var before changed : $var<br>"; //Interpolation example
    $var = 50 /*+ 12 */ * 6;
    echo "$var = var after changed<br>";
    $var++;
    echo $var . "<br>";
    $var = array("Volvo","BMW","Toyota");

    // Numbers : https://www.w3schools.com/php/php_numbers.asp

    // casting : float -> int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";

    // casting : string -> int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";

    // Access string by index
    $str[0] = 'T';
    echo ($str[0]);
    echo "<br>";

    // constant (global) [ define(name, value, case-insensitive) ]
    define("GREETING", "Welcome to Learning!");
    echo GREETING . "<hr>";

    /* Var scopes : 
        local (accessible only in certain scope),
        global (accessible everywhere (in a function must use global + varname)), 
        static (put in function, will not reset),
        superglobals (variable that is already owned by PHP and accessible from anywhere within PHP)
            ex : $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV (type : associative array)
    */

    // global var
    $x = 1;

    function getX() {
        // to integrate global var $x into the function
        global $x; 

        // to create a local var $x for this function only
        // $x = 20; 

        echo "$x<hr>"; // will get error if no both of them
    }

    getX();

    // Get informations of server
    var_dump($_SERVER);
    echo "<hr>";

    // Get server name
    var_dump($_SERVER["SERVER_NAME"]);
?>