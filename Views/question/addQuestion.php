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
    <body>
        <h1>Ajouter une question</h1>

        <form action="" method="post">
            <label for="question">Sujet :</label>
            <input type="text" id="question" name="subject" required>

            <label for="content">Votre question :</label>
            <textarea name="content" id="content" cols="30" rows="10" required></textarea>

            <button type="submit">Soumettre</button>



        </form>

        
    </body>
</html>