<?php 
    if (isset($_POST['login'])) {
        if ($_POST['uname'] == 'admin' && $_POST['pw'] == 'admin') {
            header('Location: adminpage.php');
            exit();
        } else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>

    <h1>Login Page</h1>

    <?php if (isset($error)) :?>
        <p style="color: red; font-style: italic;">Username / Password Salah!</p>
    <?php endif; ?>

    <ul>
        <form method="post">
            <li>
                <label for="uname">Username : </label>
                <input type="text" name="uname" id="uname">
            </li>

            <li>
                <label for="pw">Password : </label>
                <input type="password" name="pw" id="pw">
            </li>

            <br>
            <button type="submit" name="login" id="login">Log In</button>
        </form>   
    </ul>
    
    
</body>
</html>