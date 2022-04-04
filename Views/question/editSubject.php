<html>
<head>


<?php
    @session_start();
?>

</head>

<body class="bg-info">
<div class="container">
  
    <div class="row">
        <div class="col">
                <h2>Editer le sujet</h2>
                <?php 
                // var_dump($_SESSION['user']->getID());
                
                // var_dump($resultat->getAuthor_id());
                ?>
                <!-- afficher la question pour l'editer -->
                <!-- utiliser les setters -->
                
                <form method="post" >
                        <p>Le sujet : <?= $subject->getSubject(); ?><button>Modifier</button>  </p>
                                     

                        <!-- <input id="subject" name="subject" type="text" placeholder="modifier le sujet">
                        <button type="submit" class="btn btn-danger" title="Envoyer la modification">Envoyer</button> -->
                
                </form>

               
                
        </div>
    </div>

</div>
        

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>



        



