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


<link rel="stylesheet" href="assets/css/styleGalerie.css">

<section id="galerie" class="galerie">

    <div class="layout-section"></div><!-- filtre de l'image de fond -->

    <div class="galerie-layout">
        <h1>STAR'ISLAND</h1>
        <h2>Galerie</h2>


        <img id="main-img" src="./assets/upload/Wallpaper3.png" alt="image dynamique">
    

        <div id="slider" class="slider" >
            <div class="cascade-slider_container" >
                
                <div class="cascade-slider_slides">
                    <div class="cascade-slider_item prev">         
                        <img src="assets/upload/Wallpaper3.png">               
                    </div>
                    <div class="cascade-slider_item now">
                        <img src="assets/upload/Wallpaper3.png">
                    </div>
                    <div class="cascade-slider_item next">  
                        <img src="assets/upload/Wallpaper3.png">  
                    </div>
                    <div class="cascade-slider_item">   
                        <img src="assets/upload/Wallpaper3.png">
                    </div>
                    <div class="cascade-slider_item ">   
                        <img src="assets/upload/Wallpaper3.png">      
                    </div>

                </div>
                
                <!-- <div class="d-flex justify-content-center">
        <a href="#" id="arrowPrev" class="cascade-slider_arrow cascade-slider_arrow-left"><</a>
                <a href="#" id="ArrowNext" class="cascade-slider_arrow cascade-slider_arrow-right">></a>
    </div> -->


                <div class="arrow-container">
                    <span id="arrowPrev"  class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">
                        <!-- <img src="assets/pictures/icons8-chevron-left.png"> -->
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </span>
                    <span id="arrowNext" class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <!-- <img src="assets/pictures/icons8-chevron-right.png"> -->
                    </span>
                </div>

            </div>
        </div> <!--end .slider -->
        
    </div>
    
</section>
<script class="scriptHGalerie js"></script>
<?php require_once 'inc/footer.inc.php';          ?>