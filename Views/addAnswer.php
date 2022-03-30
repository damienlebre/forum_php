<html>
<head>
    <link rel="stylesheet" href="Public/css/bootstrap.min.css"/>
    
</head>
<body>

<div class="container">
    <?php
    include "Views/parts/menu.php"
    ?>
    <h1>
        Votre réponse
    </h1>

    <form method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="contenu">Contenu de votre réponse</label>
            <input class="form-control" name="contenu" type="text" id="contenu">
        </div>

        <input type="submit" class="btn btn-success">
    </form>

    <?php
    foreach ($errors as $error){
        echo('<div class="alert alert-danger" role="alert">
  '.$error.'
</div>');
    }
    ?>
</div>

<script rel="script" src="Public/js/bootstrap.min.js"></script>
</body>
</html>
