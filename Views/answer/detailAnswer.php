<?php
    @session_start();

?>


<html>
<head>
    <link rel="stylesheet" href="Public/css/bootstrap.min.css"/>
    
</head>
<body>

<div class="container">
    <!-- <?php
    include "Views/navbar.php";
    ?> -->
    
    <?php
    // var_dump($question);

    echo "<h2>Sujet : " . $question->getSubject() . "</h2> <br> ";
    echo "<p>ma petite question : " . $question->getContent() . " </p> <br> ";
    echo "Auteur : " . $question->getAuthor_user_id() . " -->   ";
    echo "publié le : " . $question->getPublication();
    ?>


    <h1>
        les réponses
    </h1>
   
    <!-- afficher toutes les réponses -->
        <?php 
              

                foreach($answers as $answer){
                        
                        // var_dump($answer);
                        echo '<div class="row text-white">';
                                echo '<div class="col bg-danger my-2 py-2 ">';
                                        echo "publié par : " . $answer["author_user_id"] . " </br> ";
                                        echo $answer["content"] . "</br>";
                                echo "</div>";
                        echo "</div>";
                }
                
        ?>
   
</div>

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>
