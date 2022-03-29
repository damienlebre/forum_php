<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <?php
                if(isset($this->user)){
                    echo('   <li class="nav-item">
                <a class="nav-link" href="index.php?controller=security&action=logout">Me déconnecter</a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link" href="index.php?controller=topic&action=list">Les questions !</a>
            </li

            <li class="float-end">Bonjour '.$this->user->getUsername().'</li>');
                } else {
                    echo('   <li class="nav-item">
                <a class="nav-link" href="index.php?controller=security&action=register">M\'enregistrer</a>
            </li> <li class="nav-item">
                <a class="nav-link" href="index.php?controller=security&action=login">Me connecter</a>
            </li>');
                }
            ?>

        </ul>
    </div>
</nav>
