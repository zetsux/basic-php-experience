<?php 
    function registUser($newUser) {
        $dbConn = mysqli_connect("localhost", "root", "", "phplearn");

        // No slashes and make it non case-sensitive by converting to lowercase
        $runame = strtolower(stripslashes($newUser["runame"]));
        $rpass = mysqli_real_escape_string($dbConn, $newUser["rpw"]);
        $rconfirmpass = mysqli_real_escape_string($dbConn, $newUser["rpw2"]);

        // Check if the username length is longer than the max length
        if (strlen($runame) > 100) {
            echo "
                <script>
                    alert('The username is too long, maximum allowed character is 100.');
                </script>
            ";
            return 0;
        }

        // Check if the username is already registered
        $checkUser = mysqli_query($dbConn, "SELECT username FROM users WHERE username = '$runame'");
        if (mysqli_fetch_assoc($checkUser)) {
            echo "
                <script>
                    alert('The username is already registered, please choose another username.');
                </script>
            ";
            return 0;
        }

        // Check if password and confirm password are the same
        if ($rpass !== $rconfirmpass) {
            echo "
                <script>
                    alert('The password and the confirmation password are different.');
                </script>
            ";
            return 0;
        }

        /* 
            Password Encryption
            password_hash(<password_string>, <hashing_algorithm>);

            Note : 
            PASSWORD_DEFAULT = default hashing algorithm from PHP
        */
        $rpass = password_hash($rpass, PASSWORD_DEFAULT);
        // $rpass = md5($rpass); [Not used anymore because easily crackable]

        // Check if the encrypted password is longer than maximum allower
        if (strlen($rpass) > 300) {
            echo "
                <script>
                    alert('The password is too long, please shorten it.');
                </script>
            ";
            return 0;
        }

        $query = 
            "INSERT INTO users VALUES (
                '', '$runame', '$rpass')";

        mysqli_query($dbConn, $query);
        return mysqli_affected_rows($dbConn);
    }
?>