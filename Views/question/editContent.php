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
                <h2>Editer le contenu</h2>
                <?php 
                // var_dump($_SESSION['user']->getID());
                
                // var_dump($resultat->getAuthor_id());
        ?>
                <!-- afficher la question pour l'editer -->
                <!-- utiliser les setters -->
                
                <form method="post" >               
                    <p>la question : <?= $content->getContent(); ?> </p>
                    <input id="content" name="content" type="text" placeholder="modifier le contenu">
                    <button type="submit" class="btn btn-danger" title="Envoyer la modification">Envoyer</button>
                </form>

               
                
        </div>
    </div>

</div>
        

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>



        



