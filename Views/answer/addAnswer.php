<?php
    @session_start();

?>


<html>
<head>
    <link rel="stylesheet" href="Public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Public\css\addAnswer.css">
    
</head>
<body class="main-bg">

<div class="container">
    <!-- <?php
    include "Views/navbar.php";
    ?> -->
    
    <?php
    

    echo "Sujet : " . $question->getSubject() . " <br> ";
    echo "Contenu : " . $question->getContent() . " <br> ";
    echo "Auteur : " . $question->getAuthor_user_id() . "   ";
    echo "publié le : " . $question->getPublication();
    ?>


    <h1>
        Votre réponse
    </h1>
    <form method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="content">Contenu de votre réponse</label>
            <input class="form-control" name="content" type="text" id="content">
        </div>

        <input type="submit" class="btn btn-success my-3">
    </form>

   
</div>

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>
