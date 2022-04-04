<html>
<head>


<?php
@session_start();


?>
<link rel="stylesheet" href="Public\css\myQuestion.css">
</head>

<body class="main-bg">
<div class="container">
    <table class="table">
        <thead>
            <th scope="col">Utilisateur</th>
            <th scope="col">Sujet</th>
            <th scope="col">Question</th>
            <th scope="col">Date</th>
        </thead>
    <?php
        foreach ($resultats as $resultat){
            
            echo(' <tr>
                <td>'.$resultat['author_user_id'].'</td>
                <td>'.$resultat['subject'].'</td>
                <td>'.$resultat['content'].'</td>
                <td>'.$resultat['publication_date'].'</td>');

               

            if(isset($_SESSION['user'])){
                

                echo('
                <td>
                    <a class="btn btn-success" title="Répondre " href="index.php?controller=answer&action=add&id='.$resultat['id'].'" >Répondre</a>
                    <a class="btn btn-warning" title="Modifier " href="index.php?controller=question&action=edit&id='.$resultat['id'].'" >Modifier <i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" title="Supprimer " href="index.php?controller=question&action=delete&id='.$resultat['id'].'" >Supprimer <i class="fa fa-trash"></i></a>                 
                    <a class="btn btn-primary" title="Détail " href="index.php?controller=question&action=detail&id='.$resultat['id'].'" >Détail <i class="fa fa-edit"></i></a>
                </a>
                </td>
            </tr>');
            }

        }    
                
           
        ?>
         </tbody>
    </table>
</div>

<a href="index.php?controller=question&action=addQuestion">Poser une question</a>

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>



        



