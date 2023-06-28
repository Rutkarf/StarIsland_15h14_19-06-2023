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
<link rel="stylesheet" href="assets/css/styleDevenirVIP.css">

<section class="DevenirVIP">
<div class="p-5">
        <h1>Devenir VIP</h1>
</div>
    <div class="container">
    <div class="row">
        <div class="col-md-4 container1">
            <img src="assets/upload/persoRandom1.png" alt="Image à Gauche" class="img-fluid">
        </div>

        <div class="col-md-4 container2">
            <h2>VIP</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae ipsa animi soluta nihil doloribus
                commodi reiciendis magnam obcaecati laborum odio, consectetur, tempore autem aspernatur voluptatibus
                impedit. Quasi fugiat rem autem?</p>
            <h2>VIP+</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum possimus minima necessitatibus
                adipisci nisi officia perspiciatis repellat ea? Eveniet delectus facere at voluptatum nulla minima,
                velit consequatur explicabo cumque odio.</p>
        </div>

        <div class="col-md-4 container3">
            <img src="assets/upload/persoRandom2(2).png" alt="Image à Droite" class="img-fluid">
        </div>
    </div>
</div>
</section>















<?php require_once 'inc/footer.inc.php';          ?>