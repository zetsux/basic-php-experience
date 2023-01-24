<?php
    $dbConn = mysqli_connect("localhost", "root", "", "phplearn");

    if (isset($_POST["isubmit"])) {
        /* 
            htmlspecialchars()
            
            To make sure that all HTML-related text is processed as ordinary text if inputted
        */
        $iname = htmlspecialchars($_POST["iname"]);
        $ibrand = htmlspecialchars($_POST["ibrand"]);
        $icategory = htmlspecialchars($_POST["icategory"]);
        $iprice = htmlspecialchars($_POST["iprice"]);
        $iseller = htmlspecialchars($_POST["iseller"]);
        $iimage = htmlspecialchars($_POST["iimage"]);

        $query = "INSERT INTO products VALUES(
                    '',
                    '$iname',
                    '$ibrand',
                    '$icategory',
                    '$iseller',
                    $iprice,
                    '$iimage')";

        mysqli_query($dbConn, $query);

        //Check if tha data has succesfully entered the database
        if (mysqli_affected_rows($dbConn) > 0) {
            echo "
                <script>
                    alert('Succesfully added the product!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            $err = $mysqli_error($dbConn);
            echo "
                <script>
                    alert('$err');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Product</title>
</head>
<body>
    <h1>Adding New Product</h1>

    <form method="post">
        <ul>
            <li>
                <label for="iname">Product Name : </label>
                <input type="text" name="iname" id="iname">
            </li>
            <li>
                <label for="ibrand">Brand : </label>
                <input type="text" name="ibrand" id="ibrand">
            </li>
            <li>
                <label for="icategory">Category : </label>
                <input type="text" name="icategory" id="icategory">
            </li>
            <li>
                <label for="iseller">Seller's Name : </label>
                <input type="text" name="iseller" id="iseller">
            </li>
            <li>
                <label for="iprice">Price : </label>
                <input type="number" name="iprice" id="iprice">
            </li>
            <li>
                <label for="iimage">Product Image : </label>
                <input type="text" name="iimage" id="iimage">
            </li>

            <br>
            <button type="submit" name="isubmit">Add Product</button>
        </ul>
    </form>
    
</body>
</html>