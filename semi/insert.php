<?php
require_once "connect.php";

if(!isset($_POST['first-name'])
    || !isset($_POST['name'])
    || !isset($_POST['email']))
{
    //header('Location: inscription.php');
    echo "fuck";
}
else
{
    $_POST['first-name'] = htmlentities($_POST['first-name']);
    $_POST['name'] = htmlentities($_POST['name']);
    $_POST['email'] = htmlentities($_POST['email']);

    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
        //header('Location: inscription.php');
        echo 'fuck bitchies';
    }
    else
    {
        $sql = 'SELECT 
                  `email`
                FROM
                  `user`
                WHERE
                  `email` = :email';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['email'] == $_POST['email'])
        {
            echo 'ca existe deja batard';
        }
        else
        {
            $sql =
                'INSERT INTO 
           `user`
           (`first-name`,
           `name`,
           `email`) 
        VALUES 
          (:firstname,
           :name,
           :email
           )';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue('firstname', $_POST['first-name'], PDO::PARAM_STR);
            $stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
            $stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
            $stmt->execute();

            header('Location: affiche.php');
        }
    }
}
