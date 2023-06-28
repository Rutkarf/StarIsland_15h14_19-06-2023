<?php
require_once 'config/function.php';
require_once 'inc/header.inc.php';

if (isset($_GET['a']) && $_GET['a'] == 'dis') {
    unset($_SESSION['user']);
    $_SESSION['messages']['info'][] = 'A bientôt !!';
    header('location:./');
    exit();
}

?>
<link rel="stylesheet" href="assets/css/styleServeur.css">

<section class="Serveur">

    <br>
    <br>
    
    <h1>L'EQUIPE</h1>

    <br>
    <br>
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong rounded-pill border">
            <a class="navbar-brand" href="#">TOUS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Admins<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Staffs/MODOs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Developpeurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mappers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Helpeurs</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>



































</section>
<?php require_once 'inc/footer.inc.php';          ?>