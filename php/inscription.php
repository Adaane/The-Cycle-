<?php
    require_once "connect.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post" >
        <label for="last-name">Prénom</label><input type="text" id="first-name" name="first-name">
        <label for="name">Nom</label><input type="text" id="name" name="name">
        <label for="email">E-mail</label><input type="email" id="email" name="email">
        <input type="submit" value="valider">
    </form>

</body>
</html>

