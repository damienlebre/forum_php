<?php

//session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Se connecter LOGIN :</h2>

    <form method="post">
        <label for="username">Login : </label>
        <input id="username" name="username" type="text">


        <label for="password">PW : </label>
        <input id="password" name="password" type="password">

        <button type="submit">submit</button>

        <!-- afficher les erreurs -->
        <?php

            if(($errors) != null){
        ?>
                <div class="container">
                    <div class="row p-2">
                        <div class="col-12 col-md-6 bg-danger text-white p-2">
                        <?php
                            foreach($errors as $error){                  
                                echo ('<p>');
                                echo($error);
                            }
            }           
                        ?>
                        </div>
                    </div>       
                </div>
        
    </form>


</body>
</html>