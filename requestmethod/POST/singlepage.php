<!DOCTYPE html>
<html>
<head>
    <title>Learn Post</title>
</head>
<body>

    <?php if (isset($_POST["submission"])) : ?>
        <h1>Welcome, <?= $_POST["uname"] ?></h1>
    <?php endif; ?>

    <form method="post">
        Name : <input type="name" name="uname"><br>
        <button type="submit" name="submission">Enter</button><br>
    </form>

</body>
</html>