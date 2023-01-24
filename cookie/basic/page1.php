<?php 
    /* 
        Just like session, but the informations are stored in browser/client (not server)

        Usage example : Knowing user (Remember Me), Shopping cart in e-commerce, 
        Personalization for preference recommendation, etc.

        Uses superglobal var $_COOKIE
        Created using setcookie(<name/key>, <value>, <valid_until>)

        Valid for 1 session only (just like session). If the browser is closed will be gone.
    */

    setcookie("name", "Admin", time() + 60);
?>