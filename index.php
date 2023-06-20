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
    <h1 class="text-center mb-5">BIENVENUE SUR<br>STAR'ISLAND</h1>
    <div class="carousel row justify-content-center">
        <div class="slide col-6">
            <div class="container ">
                <p class="text-center ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero debitis
                    fugiat facilis modi, praesentium corporis quis architecto est quidem eligendi magni exercitationem
                    sequi repellendus magnam dolorem. Ipsa, veritatis ex?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero debitis fugiat facilis modi,
                    praesentium corporis quis architecto est quidem eligendi magni exercitationem sequi repellendus
                    magnam dolorem. Ipsa, veritatis ex?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero debitis fugiat facilis modi,
                    praesentium corporis quis architecto est quidem eligendi magni exercitationem sequi repellendus
                    magnam dolorem. Ipsa, veritatis ex?</p>
            </div>
        </div>


        <!-- Contenu de la deuxième diapositive -->
        <div class="slide">


            <div id="carouselExampleIndicators" class="carousel " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/upload/Wallpaper1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/upload/Wallpaper2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/upload/Wallpaper3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="slide">
            <!-- Contenu de la troisième diapositive -->
        </div>
    </div>
    <!-- <div class="d-flex justify-content-center">
    <button id="previous-slide">Précédent</button>
    <button id="next-slide">Suivant</button>
  </div> -->

    <div class="d-flex justify-content-center">
        <a href="#" id="previous-slide" class="text-white bg-primary bg-opacity-75 rounded p-3 me-2"><</a>
                <a href="#" id="next-slide" class="text-white bg-primary bg-opacity-75  rounded p-3">></a>
    </div>

    </div>

    <div class="text-center">
        <img src="assets/upload/logo_discord.png" alt="" width=70>
    </div>







</section>
<!-- Contenu de Commentaire ajouter sur le site a voir avec Cesaire comment l'inclure  -->
<section class="comment">


    <div class="container">
        <div class="line-comment">


            <div class="card-comment">
                <img src="assets/upload/Avatar1.jfif" alt="Ma photo">
                <p> commentaire sur la photo</p>
            </div>


            <div class="card-comment">
                <img src="assets/upload/Avatar1.jfif" alt="Ma photo">
                <p> commentaire sur la photo</p>
            </div>


            <div class="card-comment">
                <img src="assets/upload/Avatar1.jfif" alt="Ma photo">
                <p> commentaire sur la photo</p>
            </div>


            <div class="card-comment">
                <img src="assets/upload/Avatar1.jfif" alt="Ma photo">
                <p> commentaire sur la photo</p>
            </div>
        </div>
    </div>


    <div class="d-flex justify-content-center border">
        <form>
            <div class="form-group">
                <label for="rating">Note :</label>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5" title="5 étoiles"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4" title="4 étoiles"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3" title="3 étoiles"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2" title="2 étoiles"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1" title="1 étoile"></label>
                </div>
            </div>

            <div class="form-group">
                <label for="comment">Commentaire :</label>
                <input type="text" class="form-control" id="comment" placeholder="Entrez votre commentaire">
            </div>

            <button type="submit" class="btn btn-primary">Publier</button>
        </form>
    </div>


</section>

<?php require_once 'inc/footer.inc.php';          ?>