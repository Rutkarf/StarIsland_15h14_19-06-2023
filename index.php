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

<section class="home">

    <div class="carousel">
  <div class="slide">
  <div class="container h-100 d-flex flex-column justify-content-evenly align-items-center">
    <br>
    <h1 class="">BIENVENUE SUR<br>STAR'ISLAND</h1>
    <br>
    <p class="px-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero debitis fugiat facilis modi, praesentium corporis quis architecto est quidem eligendi magni exercitationem sequi repellendus magnam dolorem. Ipsa, veritatis ex?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero debitis fugiat facilis modi, praesentium corporis quis architecto est quidem eligendi magni exercitationem sequi repellendus magnam dolorem. Ipsa, veritatis ex?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero debitis fugiat facilis modi, praesentium corporis quis architecto est quidem eligendi magni exercitationem sequi repellendus magnam dolorem. Ipsa, veritatis ex?</p>
</div>

  <div class="slide">
    <!-- Contenu de la deuxième diapositive!!! Carrousel imbriqué pour la gallerie -->
  </div>
  <div class="slide">
    <!-- Contenu de la troisième diapositive !!!API TOP SERVEUR A INCLURE!!!! -->
  </div>
</div>
<button id="previous-slide">Précédent</button>
<button id="next-slide">Suivant</button>

<p class="">test</p>
    <div class="text-center">
        <img src="assets/upload/logo_discord.png" alt="" width=70>
    </div>







</section>

<section class="comment">
    <!-- Contenu de Commentaire ajouter sur le site a voir avec Cesaire comment l'inclure  -->

</section>



<?php require_once 'inc/footer.inc.php';          ?>