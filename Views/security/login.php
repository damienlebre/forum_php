<?php

//session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public\css\login.css">
    <link rel="shortcut icon" href="Public\assets\logo\favicon.png"/>
    <title>Login</title>
</head>
<body class="main-bg">
  
    <div class="login-container text-center animated flipInX">
        <div>
            <h1 class="logo-badge text-whitesmoke text-center"><span class="fa fa-user-circle"></span></h1>
        </div>
            <h3 class="text-whitesmoke ">Se connecter à SuperForum</h3>                
            <div class="container-content ">
            <form class="margin-t" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="*****" required="">
                </div>
                <button type="submit" class="form-button button-l margin-b rounded">Se connecter</button>
        
                       
                <p class="text-whitesmoke text-center"><small>Pas encore de compte?</small></p>
                <a class="text-darkyellow " href="index.php?controller=security&action=register"><small>S'inscrire</small></a>
                <p class="margin-t text-whitesmoke text-center"><small> Projet Test &copy; 2022</small> </p>
                <!-- afficher les erreurs -->
                <?php

                if(($errors) != null){
                ?>
                    <div class="container">
                        <div class="row p-2">
                            <div class="col-12 col-md-6 bg-danger text-white p-2">
                            <?php
                                foreach($errors as $error){                  
                                    echo ('<p>');
                                    echo($error);
                                }
                }           
                            ?>
                            </div>
                        </div>       
                    </div>
                    
            </form>
           
        </div>
    </div>

</body>
</html>