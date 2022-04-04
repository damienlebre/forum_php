<?php
    @session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Public\assets\logo\favicon.png"/>
    <link rel="stylesheet" href="Public\css\home.css">
    <title>Accueil</title>
</head>
<body class="main-bg">
<header class="masthead text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded" src="Public\assets\logo\logo.png" alt="logo forum" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">The SuperForum</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-code"></i></div>
                    <div class="divider-custom-line"></div>
                </div>                   
                        
                 <p class="masthead-subheading font-weight-light mb-0">Bonjour
                     <em><?php
                         if(isset($_SESSION['user'])){ 
                 echo $_SESSION['user']->getUser_ID();}
                 ?></em>, bienvenue sur SuperForum.</p>
              
            </div>
        </header>




    
    

  

</body>
</html>