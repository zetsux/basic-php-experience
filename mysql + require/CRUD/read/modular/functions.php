<?php 
    $dbConn = mysqli_connect("localhost", "root", "", "phplearn");

    function doQuery($query) {
        global $dbConn;
        $res = mysqli_query($dbConn, $query);
        $rows = [];

        while ($r = mysqli_fetch_assoc($res)) {
            $rows[] = $r;
        }

        return $rows;
    }
?>