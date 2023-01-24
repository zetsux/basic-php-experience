<!DOCTYPE html>
<html>
<body>

    <h1>Learn User Input</h1>

    <!-- GET = displayed in url as parameters, for short datas that are allowed to be visible for everyone -->
    <!-- POST = embedded in the body of HTTP Request, invisible to others and has no limit on the amount -->

    <form action="userinput.php" method="get">
        Name : <input type="text" name="username"><br>
        Age : <input type="number" name="userage"><br>
        <input type="submit"><br>
    </form>

    <form action="userinput.php" method="post">
        Password : <input type="password" name="password"><br>
        <input type="submit"><br>
    </form>
    <br>

    <!-- Displayed in URL -->
    Your name is : <?php echo $_GET["username"] ?> <br>
    Your age is : <?php echo $_GET["userage"] ?> <br>

    <!-- Not displayed in URL -->
    Your password is : <?php echo $_POST["password"] ?> <br>
    
</body>
</html>