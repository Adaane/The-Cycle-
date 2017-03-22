<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root','root',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die($e->getMessage());
}

