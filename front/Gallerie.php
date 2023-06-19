<?php
require_once '../config/function.php';
require_once '../inc/header.inc.php';

if (isset($_GET['a']) && $_GET['a'] == 'dis') {
    unset($_SESSION['user']);
    $_SESSION['messages']['info'][] = 'A bientôt !!';
    header('location:./');
    exit();
}

?>
<section class="Gallerie">
    <div id="carousel">
        <img class="active" src="../assets/upload/Wallpaper1.png" alt="Image 1">
    </div>
    
    <div id="thumbnail-container">
        <div class="thumbnail active" style="background-image: url('../assets/upload/Wallpaper1.png');" onclick="changeImage(0)"></div>
        <div class="thumbnail" style="background-image: url('../assets/upload/Wallpaper2.png');" onclick="changeImage(1)"></div>
        <div class="thumbnail" style="background-image: url('../assets/upload/Wallpaper3.png');" onclick="changeImage(2)"></div>
        <div class="thumbnail" style="background-image: url('../assets/upload/Wallpaper4.png');" onclick="changeImage(3)"></div>
    </div>
    
    <div id="prev-btn" onclick="prevImage()">&lt;</div>
    <div id="next-btn" onclick="nextImage()">&gt;</div>



    <?php require_once '../inc/footer.inc.php';          ?>