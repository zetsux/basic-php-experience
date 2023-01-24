<?php
    /* 
        require '<file>';

        To include everything in the input file into current file
    */
    require 'functions.php';

    $products = doQuery("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elecommerce Admin Page</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Name</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Price</th>
            <th>Seller's Name</th>
            <th>Action</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach($products as $p) :?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $p['name'] ?></td>
                <td><?= $p['brand'] ?></td>
                <td><?= $p['category'] ?></td>
                <td>Rp <?= $p['price'] ?></td>
                <td><?= $p['seller'] ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>