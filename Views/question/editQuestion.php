<html>
<head>

<?php
    @session_start();
?>
 <link rel="stylesheet" href="Public\css\editQuestion.css">
</head>

<body class="main-bg">
<div class="container">
  
    <div class="row">
        <div class="col">
                <h2>Editer le sujet</h2>

                <form method="post" >
                    <!-- modifier le sujet -->
                    <div class="py-4">
                        <p>Le sujet : <?= $subject->getSubject(); ?></p>
                        <input class="text-black py-2" id="subject" name="subject" type="text" placeholder="Modifier le sujet">
                        <button type="submit" class="btn btn-danger" title="Envoyer la modification">Envoyer</button>               
                    </div>
                    <!-- modifier la question -->
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
