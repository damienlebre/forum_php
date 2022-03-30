<?php

@session_start();
//var_dump($_SESSION['user']);

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Acceuil</a> <!--erreur dans le href pour retour à l'accueil-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <?php
               
       
            if(isset($_SESSION['user'])){
                echo('   <li class="nav-item">
                      <a class="nav-link" href="index.php?controller=security&action=logout">Me déconnecter</a>
                  </li>
                
                   <li class="nav-item">
                      <a class="nav-link" href="index.php?controller=question&action=listQuestion">Les questions !</a>
                  </li

                  <li class="nav-item">
                      <a class="nav-link" href="index.php?controller=question&action=list">Mes questions !</a>
                  </li
    
                    ');
            
                   
        }else{
            echo('   <li class="nav-item">
            <a class="nav-link" href="index.php?controller=security&action=register">M\'enregistrer</a>
        </li> <li class="nav-item">
            <a class="nav-link" href="index.php?controller=security&action=login">Me connecter</a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="index.php?controller=question&action=listQuestion">Les questions !</a>
        </li');
        }
            ?>

        </ul>
    </div>
</nav>
