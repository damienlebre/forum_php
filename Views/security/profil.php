<?php
    @session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Public\assets\logo\favicon.png"/>
    <link rel="stylesheet" href="Public\css\profil.css">
    <title>Votre profil</title>
</head>
<body class="main-bg">
    

<h1 class="text-center">Bienvenue sur votre profil <?=$_SESSION['user']->getUser_ID()?></h1>


<!--todo faire l'affichage du profil-->


    <div class="d-flex justify-content-center">
        <div class="row ">
             <div class="card text-center" style="width: 18rem;">
                <img src="Public/uploads/<?php echo($_SESSION['user']->getImage())?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$_SESSION['user']->getUser_ID()?></h5>
            </div>
                </div>
        </div>
    </div>
    




<!-- formulaire de modification des info profil-->

<h2 class="text-center">Modifier mon profil</h2>

<div class="d-flex justify-content-center">
    <div class="row ">
        <form enctype="multipart/form-data" method="post">
                    <input type="checkbox" name="raison">
                <div class="mb-3">
                    <label for="username" class="form-label">Nouveau Login : </label>
                    <input class="form-control" id="username" name="username" type="text">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Nouvel Email</label>
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com">
                </div>

                <!-- Changer le mot de passe-->
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="password" class="col-form-label">Nouveau mot de passe</label>
                    </div>
                    <div class="col-auto">
                    <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.</span> 
                    </div>
                </div>

                <!-- Confirmer le nouveau mot de passe-->
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="password_confirm" class="col-form-label">Resaisir le mot de passe</label>
                    </div>
                    <div class="col-auto">
                    <input type="password_confirm" id="password_confirm" name="password_confirm" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text"> Doit être identique</span> 
                    </div>
                </div>

                
                <!-- Ajouter une photo de profil-->
                <div class="mb-3">
                    <label for="formFile" class="form-label" >Ajouter/modifier une image de profil</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>

            </form>
    </div>
</div>
</body>
</html>

