<?php

@session_start();



?>

<link rel="stylesheet" href="Public\css\nav.css">

<nav>
      <div class="logo d-flex align-items-center" >
          <a href="index.php" class=""><img src="Public\assets\logo\logo.png" alt="Logo Image"></a>
      </div>
      <div class="hamburger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
      </div>
      <ul class="nav-links">
         
          <li><a href="index.php">Acceuil</a></li>
          <li><a href="index.php?controller=question&action=listQuestion">Listes des Questions</a></li>
          <?php

            if(isset($_SESSION['user'])){
                echo('
                    <li><a href="index.php?controller=question&action=MyQuestionList">Mes questions</a></li>
                    <li><a href="index.php?controller=security&action=logout"><button class="logout-button">Se déconnecter</button></a></li>
                ');
            }else{
                echo('
                    <li><a href="index.php?controller=security&action=login"><button class="login-button">Se connecter </button></a></li>
                    <li><a href="index.php?controller=security&action=register"><button class="join-button">S\'inscrire</button></a></li> 
                    ');
            } 
            ?>        
      </ul>
</nav>
<script src="Public\js\nav.js"></script>