<html>
<head>


<?php
    @session_start();
?>
<link rel="stylesheet" href="Public\css\listQuestion.css">
</head>

<body class="main-bg">
<div class="container">
    <table class="table text-white">
        <thead>
            <th scope="col">Utilisateur</th>
            <th scope="col">Sujet</th>
            <th scope="col">Question</th>
            <th scope="col">Date</th>
        </thead>
    <?php

    

        foreach ($resultats as $resultat){
            echo(' <tr>
                <td>'.$resultat->getAuthor_user_id().'</td>
                <td>'.$resultat->getSubject().'</td>
                <td>'.$resultat->getContent().'</td>
                <td>'.$resultat->getPublication().'</td>');

               

            if(isset($_SESSION['user'])){
                
    ?>
                
                <td>
                    <a class="btn btn-success" title="Répondre " href="index.php?controller=answer&action=add&id=<?= $resultat->getId() ?>" >
                    <i class="fa-solid fa-plus"></i>
                    </a>

                    
                    
                       <a class="btn btn-primary" title="Détail"  href="index.php?controller=question&action=detail&id=<?= $resultat->getId() ?>">
                        <i class="fa fa-eye"></i>
                    </a>
                        <!-- TODO enlever le bouton en fonction du profil -->
                    <?php
                        // var_dump($_SESSION['user']->getID());
                        // var_dump($resultat->getAuthor_id());
                        if( $_SESSION['user']->getID() == $resultat->getAuthor_id() ){
                    ?>
                            <a class="btn btn-warning" title="Editer"  href="index.php?controller=question&action=edit&id=<?= $resultat->getId() ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" title="Supprimer"  href="index.php?controller=question&action=delete&id=<?= $resultat->getId() ?>">
                                <i class="fa fa-trash"></i>
                            </a>

                    <?php  }

                        
                    ?>
                     
                </td>
            </tr>

        <?php
            }

        }    
                
           
        ?>
         </tbody>
    </table>

    <?php
    if(isset($_SESSION['user'])){
       echo(' <div class="row">
            <div class="col">
                <a class="btn btn-danger" href="index.php?controller=question&action=addQuestion">Poser une question</a>
            </div>
        </div>');
    }
    ?>
</div>
        

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>



        



