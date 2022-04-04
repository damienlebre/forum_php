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
                    <div class="py-4">
                        <p>Le sujet : <?= $subject->getSubject(); ?></p>
                        <input class="text-black py-2" id="subject" name="subject" type="text" placeholder="Modifier le sujet">
                        <button type="submit" class="btn btn-danger" title="Envoyer la modification">Envoyer</button>               
                    </div>

                    <div class="py-4">
                        <p>La question : <?= $subject->getContent(); ?> </p>
                        <input class="text-black py-2" id="content" name="content" type="text" placeholder="Modifier la question">
                        <button type="submit" class="btn btn-danger" title="Envoyer la modification">Envoyer</button>
                    </div>
                      
                </form>

               
                <a class="btn btn-danger" href="index.php?controller=question&action=listQuestion" role="button">Retour à la liste de questions</a>    
                
               



                
        </div>
    </div>

</div>
        

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>

