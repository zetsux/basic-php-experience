<?php 
    session_start();

    // To end session (the top 2 rows are to be very2 sure that the session is succesfully closed)
    $_SESSION = [];
    session_unset();
    session_destroy();
?>