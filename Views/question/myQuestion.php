<html>
<head>


<?php
@session_start();


?>

</head>

<body class="bg-info">
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



        



