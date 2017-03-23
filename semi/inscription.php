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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="formulaire">
    <div class="form-left">
            <h2>Précommander maintenant</h2>
            <p>buying the right telescope to take your<br>love of astronomy to the next is big</p>
            <form action="insert.php" method="post">
                <input type="text" id="first-name" name="first-name" placeholder="Prénom" required>
                <input type="text" id="name" name="name" placeholder="Nom" required>
                <input type="email" id="email" name="email" placeholder="E-mail" required><br>
                <input type="checkbox" name="accept" id="accept" required><label for="accept">accepter les conditions</label><br>
                <input type="submit" value="Précommander" id="submit">
            </form>
        </div>
        <div class="form-right">
            <figure>
                <img src="img-content/bike.png" alt="bike">
            </figure>
            <h2>Adeline Guzman</h2>
            <h3>buying the right telescope to take</h3>
            <p>buying the right telescope to take your<br>love of astronomy to the next is big</p>
            <h3>buying the right telescope to take</h3>
            <p>buying the right telescope to take your<br>love of astronomy to the next is big</p>
        </div>
    </div>
</body>
</html>
