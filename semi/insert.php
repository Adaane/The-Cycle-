<?php
require_once "connect.php";

if(!isset($_POST['first-name'])
    || !isset($_POST['name'])
    || !isset($_POST['email']))
{
    header('refresh:2;url= inscription.php');
    echo "il faut remplir le champ";
}
else
{
    $_POST['first-name'] = htmlentities($_POST['first-name']);
    $_POST['name'] = htmlentities($_POST['name']);
    $_POST['email'] = htmlentities($_POST['email']);

    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
            header('refresh:2;url= inscription.php');
        echo 'votre email ne dit pas contenir de caracter speciaux';
    }
    else
    {
        $sql = 'SELECT
                  `mail`
                FROM
                  `user`
                WHERE
                  `mail` = :email';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['mail'] == $_POST['email'])
        {
            echo 'ce mail exist deja';
                header('refresh:2;url= inscription.php');
        }
        else
        {
            $sql =
                'INSERT INTO
           `user`
           (`prenom`,
           `nom`,
           `mail`)
        VALUES
          (:firstname,
           :name,
           :email
           )';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':firstname', $_POST['first-name'], PDO::PARAM_STR);
            $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
            $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
            $stmt->execute();


                $titre ="inscription";
                $email = $_POST['email'];
                $message = 'Bonjour '.$_POST['first-name'].', <br> ';
                $message .= 'Votre précommande a bien été enregistré. Nous vous tenons informer de la suite des évenements très prochainements ! ';
                $message .= '<br/> A bientôt';

                $from = "From: hello <newsletter@monsite.ext>\nMime-Version:";
                $from .= " 1.0\nContent-Type: text/html; charset=utf8\n";

                $mai = mail($email, $titre, $message, $from);

                var_dump($mai);
            // header('Location: affiche.php');
        }
    }
}
