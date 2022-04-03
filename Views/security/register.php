<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public\css\register.css">
    <link rel="shortcut icon" href="Public\assets\logo\favicon.png"/>
    <title>Register</title>
</head>
<body class="main-bg">


    <div class="register-container text-center animated flipInX">
                <div>
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                </div>
                    <h3 class="text-whitesmoke">S'inscrire sur SuperForum</h3>                    
                <div class="container-content ">

                    <form class="margin-t" method="post">
                        <div class="form-group">
                        <label for="username">Choisir votre nom d'utilisateur :</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                        <label for="username">Choisir votre mot de passe :</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="*****" required="">
                        </div>
                        <div class="form-group">
                        <label for="password_confirm">Confirmation de votre mot de passe: </label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="*****" required="">
                        </div>
                        <div class="form-group">
                            <label for="mail">Adresse mail: </label>
                            <input type="mail" class="form-control" id="mail" name="mail" placeholder="mon@mail.com" required="">
                        </div>
                        <button type="submit" class="form-button button-l rounded margin-b">S'inscrire</button>
        
                       
                        <p class="text-whitesmoke text-center"><small>Vous avez déja un compte?</small></p>
                        <a class="text-darkyellow" href="index.php?controller=security&action=login"><small>Connectez-vous</small></a>
                    </form>
                    <p class="margin-t text-whitesmoke"><small> Projet Test &copy; 2022</small> </p>
                </div>
            </div>

</body>
</html>