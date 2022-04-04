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
                    <a title="Répondre " href="index.php?controller=answer&action=add&id='.$resultat['id'].'" >Répondre</a>
                    <a title="Modifier " href="index.php?controller=question&action=edit&id='.$resultat['id'].'" >Modifier</a>
                    <a title="Supprimer " href="index.php?controller=question&action=delete&id='.$resultat['id'].'" >Supprimer</a>                 
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



        



