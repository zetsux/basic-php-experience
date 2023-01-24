<?php
    /* 
        Session will make the var accessible everywhere if the function session_start() is done there.
        It is done by storing it in the server.
    
        $_SESSION["<var_string_key>"] is the session variable,
        It will be accessible after session_start() is called

        A session will end :
        1. Manually by session_destroy() (try checking page3.php)
        2. After exiting the browser
        3. After turning off / restarting the device
    */

    session_start();
    $_SESSION["text"] = "Hello World"
?>