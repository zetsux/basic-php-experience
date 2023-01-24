<!-- REDIRECT (if link is not complete) -->
<?php 
    if (!isset($_GET['image']) || !isset($_GET['name']) || !isset($_GET['brand'])
        || !isset($_GET['category']) || !isset($_GET['price']) || !isset($_GET['seller'])) {
        header("Location: page1.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn Get</title>
</head>
<body>

    <ul>
        <img src="img/<?= $_GET["image"]; ?>">
        <li>Name : <?= $_GET["name"]; ?></li>
        <li>Brand : <?= $_GET["brand"]; ?></li>
        <li>Category : <?= $_GET["category"]; ?></li>
        <li>Price : <?= $_GET["price"]; ?></li>
        <li>Seller's Name : <?= $_GET["seller"]; ?></li>
        <hr>
    </ul>

    <a href="page1.php">Go Back</a>

</body>
</html>