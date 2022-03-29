<html>
<head>
    <link rel="stylesheet" href="Public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Public/css/awesome/css/all.css"/>
</head>

<body>
<div class="container">

    <?php
    require '../loader.php';
    //include "Views/menu.php";
    $resultats = new QuestionController;


    var_dump($resultats->listQuestion());
    
    die;
    ?>

    <table class="table">
        <thead>
            <th scope="col">Utilisateur</th>
            <th scope="col">Sujet</th>
            <th scope="col">Question</th>
            <th scope="col">Date</th>
        </thead>
<?php
        foreach ($resultats as $resultat){
            //toto fini moi cette merde de tableau !! CONARD
        }



</div>