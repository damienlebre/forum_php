<html>
<head>
<?php


?>
</head>

<body>
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
                <td>'.$resultat->getAuthor_user_id().'</td>
                <td>'.$resultat->getSubject().'</td>
                <td>'.$resultat->getContent().'</td>
                <td>'.$resultat->getPublication().'</td>

                <td>
                    <a title="Supprimer"  href="index.php?controller=question&action=delete&id='.$resultat->getId().'">
                        <i class="fa fa-trash"></i>
                    </a>
                    
                       <a title="Détail"  href="index.php?controller=question&action=detail&id='.$resultat->getId().'">
                        <i class="fa fa-eye"></i>
                    </a>
                    
                      <a title="Editer"  href="index.php?controller=question&action=edit&id='.$resultat->getId().'">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>');
        }
        ?>
         </tbody>
    </table>
</div>

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>



        



