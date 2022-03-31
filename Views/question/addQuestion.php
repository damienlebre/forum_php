<?php
@session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter question</title>
</head>
    <body class="bg-success bg-gradient">
        <h1 class="text-left ms-3 mb-5 text-white">Ajouter une question :</h1>

        <form  method="post" class="d-flex flex-column "> 
            <label for="question" class="ms-5 fw-bold text-white">Sujet :</label>
            <div class="ms-5">
                <input type="text" id="question" name="subject"  class="col-6 mb-3 rounded border-0" required>
            </div>

            <label for="content" class="ms-5 fw-bold text-white">Votre question :</label>
            <div class="ms-5">
                <textarea name="content" id="content"  rows="10" class="col-6 rounded" required></textarea>
            </div>
            <button type="submit" class="btn btn-warning btn-sm mt-3 col-3 ms-5 text-white fw-bold">Soumettre</button>

            <?php
            if($errors != null){
                foreach($errors as $error){
                        echo($error);

                }
            }
            ?>

        </form>

        
    </body>
</html>