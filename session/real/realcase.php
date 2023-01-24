<?php 
    /* To use for Login Session as a checker if user have logged in or not :
        - After a user logged in, initialize/fill $_SESSION["loggedin"] with anything (ex : true)

        - Add this code to the start of every page that need login to access
            if (!isset($_SESSION['loggedin'])){
                header('Location: login.php');
                exit;
            }

        - Add this code to the login page to make sure that a logged in user can't access the login page
            if (isset($_SESSION['loggedin'])){
                header('Location: index.php');
                exit;
            }

        - Add a logout screen with session_destroy()
?>