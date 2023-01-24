<?php 
    $dbConn = mysqli_connect("localhost", "root", "", "phplearn");

    function addProduct($newData, $newFile) {
        global $dbConn;

        $iname = htmlspecialchars($newData["iname"]);
        $ibrand = htmlspecialchars($newData["ibrand"]);
        $icategory = htmlspecialchars($newData["icategory"]);
        $iprice = htmlspecialchars($newData["iprice"]);
        $iseller = htmlspecialchars($newData["iseller"]);

        $iimage = uploadFile($newFile["iimage"], ['jpg', 'png', 'jpeg'], 2000000);
        if (!$iimage) {
            return 0;
        }

        $query = 
            "INSERT INTO products VALUES (
                '', '$iname', '$ibrand', '$icategory', '$iseller', $iprice, '$iimage')";

        mysqli_query($dbConn, $query);
        return mysqli_affected_rows($dbConn);
    }

    function uploadFile($file, $allowedExtensions, $maxSize) {
        $fileName = $file["name"];
        $fileSize = $file["size"];
        $fileTmp = $file["tmp_name"];

        // Get the lowercase last bit of string divided by a '.', which must be the extension of the file
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));

        // Check if the extension is not allowed
        $allowedEString = implode(", ", $allowedExtensions);
        if ( !in_array($fileExtension, $allowedExtensions) ) {
            echo "
                <script>
                    alert('Please upload a file with extension $allowedEString.');
                </script>
            ";
            return false;
        }

        // Check if the size is more than maximum allowed size
        if ( $fileSize > $maxSize ) {
            echo "
                <script>
                    alert('File size is too large, maximum allowed size is $maxSize byte(s).');
                </script>
            ";
            return false;
        }

        /* 
            Give uniqid (unique 13-char string based on time(?)) to image name
            To avoid same name
        */
        $fileName = str_replace("." . $fileExtension, "", $fileName);
        $fileName = substr($fileName, 0, 75) . uniqid() . '.' . $fileExtension;

        /* 
            Move image from it's temporary path to the real path used
        */
        move_uploaded_file($fileTmp, '../img/' . $fileName);
        return $fileName;
    }
?>