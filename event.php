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
<link rel="stylesheet" href="assets/css/styleEvent.css">

<section class="Event">
    
<section class="Event">
   
<div class="container">
        <div class="row">
            <div class="col-md-6 pt-5">
                <img src="assets/upload/Prison1Event.png" alt="Image de l'Evenement">
            </div>

            <div class="col-md-6">
                <div class="p-5">
                    <h1 class="text-center">Nom de l'Evenement</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus tempora, nostrum aliquam fuga enim provident vel amet maxime deserunt. Ab veritatis neque iure ipsam sapiente suscipit, aut quam doloremque quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nulla eligendi iure placeat! Inventore ea ab, hic aspernatur placeat suscipit minima, iste praesentium velit veniam distinctio et, nisi quia laboriosam.</p>
                </div>
            </div>
        </div>
    </div>
</section>













</section>
















<?php require_once 'inc/footer.inc.php';          ?>