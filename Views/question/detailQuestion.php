<html>
<head>
 <link rel="stylesheet" href="Public\css\detailQuestion.css">
</head>
<body class="main-bg">
<div class="container">
   

    <a href="index.php?controller=question&action=list">Retour au listing</a>

    <!-- J'affiche le label de ma catégorie en passant par le getteurs (attribut label => privé) -->
    <h1> <?php echo($question->getSubject());?> </h1>

    <h2><u>Ecrit par <?php echo($question->getAuthor_user_id()) . ' le '. $question->getPublication()->format('d/m/Y'); ?></u></h2>

    <div class="col-md-12">
        <div class="row">
            
            <div class="col-md-6"><?php echo($question->getContent());?></div>
        </div>
    </div>
</div>


</body>
</html>
