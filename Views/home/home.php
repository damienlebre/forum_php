<?php
    @session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body class="bg-warning">
    
    <h1 class="text-center">Bienvenue sur SuperForum</h1>

    
    

    <?php
       
        
        if(isset($_SESSION['user'])){
            echo "nom du user : ";
           echo $_SESSION['user']->getUser_ID();
            
     ?>       
           <a href="index.php?controller=security&action=logout">Logout</a>

     <?php   }
    ?>

</body>
</html>