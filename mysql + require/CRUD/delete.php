<?php 
    require 'functions.php';

    $dId = $_GET['id'];

    $query = "DELETE FROM products WHERE id = $dId";
    mysqli_query($dbConn, $query);

    if (mysqli_affected_rows($dbConn) > 0) {
        echo "
            <script>
                alert('Succesfully deleted the product!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed deleting the product..');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>