<?php 
    // An array, where the key can be custom-made

    // Declaring an associative array
    $john = ["name" => "John Duke", "age" => 18, "gender" => "L", "married" => true];

    // Output an element
    echo $john["name"] . "<br>";

    // Output elements using loop
    foreach ($john as $e) {
        echo "$e ";
    } 

    // Declaring an array of associative array
    $people = [
        ["name" => "John Duke", "age" => 18, "gender" => "L", "married" => true],
        ["age" => 22, "name" => "Beige Po", "married" => false, "gender" => "P"],
        ["gender" => "L", "age" => 19, "name" => "Ken Rock", "married" => true]
    ];

    echo "<hr>";

    // Output an element
    echo $people[0]["name"] . "<br>";

    // Basically functions like an ordinary array except for the key/index
?>