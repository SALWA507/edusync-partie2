<?php
session_start();
if (isset($_POST["logout"])) {
    session_destroy();
    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<H1>HELLO</H1>
    <form action="#" method="POST">
        <input type="submit" value="deconnecion" name="logout">
    </form>
</body>
</html>