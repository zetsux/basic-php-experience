<?php 
    // mysqli_connect(<nama_host>, <uname_mysql>, <pw_mysql>, <nama_database>);
    $dbConn = mysqli_connect("localhost", "root", "", "phplearn");

    // mysqli_query(<string_koneksi_db = var yg di atas>, <query>)
    $res = mysqli_query($dbConn, "SELECT * FROM products LIMIT 0, 5"); // if success will return true, else return false

    /* 
        mySQL syntax : LIMIT a, b 
    
        a = starting data index, b = number of data to select
    */

    if (!$res) {
        echo mysqli_error($dbConn);
    } else {
        // return numeric array of next top row
        # $rw = mysqli_fetch_row($res);

        // return associative array of next top row
        # $as = mysqli_fetch_assoc($res);

        // return numeric array & associative array of next top row (heavy)
        # $ar = mysqli_fetch_array($res);

        // return object of next top row (call with var-><name_of_attribute>)
        # $ob = mysqli_fetch_object($res);
        
        // fetch every row (until no row is left)
        // while ($row = mysqli_fetch_assoc($res)) {
        //     echo $p["name"] . "<br>";
        // }
    }
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
        <?php while($row = mysqli_fetch_assoc($res)) :?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['brand'] ?></td>
                <td><?= $row['category'] ?></td>
                <td>Rp <?= $row['price'] ?></td>
                <td><?= $row['seller'] ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>