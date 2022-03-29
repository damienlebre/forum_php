<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    
    <h1>Bienvenue sur SuperForum</h1>

    <a href="index.php?controller=security&action=login">se connecter</a>
    <button>s'enregistrer</button>

    <?php
 echo $_SESSION['user']->getUser_ID();
        
        if(isset($_SESSION['user'])){
            echo "nom du user : ";
           echo $_SESSION['user']->getUser_ID();
        }
    ?>

</body>
</html>