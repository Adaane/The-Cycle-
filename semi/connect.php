<?php
// declaratiion des variable du serveur,user,password et la database pourplus de propreter et pour les moddifer facilement
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bike";


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{

    echo "Connection raté: " . $e->getMessage();
}

$pdo->exec('set names utf8');
