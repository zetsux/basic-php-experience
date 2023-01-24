<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $people = [
            ["name" => "John Duke", "age" => 18, "gender" => "L", "married" => true, "image" => "p1.jpg"],
            ["name" => "Ken Rock", "age" => 19, "gender" => "L", "married" => true, "image" => "p2.jpeg"],
            ["name" => "Beige Po", "age" => 22, "gender" => "P", "married" => false, "image" => "p3.jpg"]
        ];
    ?>

    <ul>
        <?php foreach ($people as $p) : ?>
            <img src="img/<?= $p["image"]; ?>">
            <li>Name : <?= $p["name"]; ?></li>
            <li>Age : <?= $p["age"]; ?></li>
            <li>Married : <?= ($p["married"] ? "Yes" : "No"); ?></li>
            <hr>
        <?php endforeach; ?>
    </ul>

</body>
</html>