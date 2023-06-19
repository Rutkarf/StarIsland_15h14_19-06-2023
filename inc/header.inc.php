<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/lux/bootstrap.min.css"
        integrity="sha512-+TCHrZDlJaieLxYGAxpR5QgMae/jFXNkrc6sxxYsIVuo/28nknKtf9Qv+J2PqqPXj0vtZo9AKW/SMWXe8i/o6w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASE_PATH; ?>">
                    <img src="assets/upload/starisland.png" alt="Logo Star'Island" width=150>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= BASE_PATH; ?>"><img src="assets/upload/Vector.png"
                                    alt="">
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="nav-link" href="../front/Gallerie.php">Gallerie</a>
                        </li>
                        <li class="nav-item  my-auto">
                            <a class="nav-link" href="../front/DevenirVIP.php">Devenir VIP</a>
                        </li>
                        <li class="nav-item  my-auto">
                            <a class="nav-link" href="../front/Serveur.php">Serveur</a>
                        </li>

                        <?php if (admin()) :           ?>
                        <li class="nav-item my-auto dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">ADMIN</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= BASE_PATH . 'back/userList.php'; ?>">Gestion
                                    utilisateur</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= BASE_PATH . 'back/'; ?>">Accès Back-office</a>
                            </div>
                        </li>
                        <?php endif;           ?>
                    </ul>

                    <div class="navbar-nav d-flex flex-column me-auto">
                        <a class="nav-link" href="<?= BASE_PATH . '../front/tuto.php'; ?>"><img
                                src="<?= BASE_PATH . 'assets/img/btn-1.png' ?>" alt="" width="27"
                                class="me-2">Tutoriel</a>
                        <a class="nav-link" href="<?= BASE_PATH . '/front/event.php'; ?>"><img
                                src="<?= BASE_PATH . 'assets/img/btn-2.png' ?>" alt="" width="27"
                                class="me-2">Evènements</a>
                    </div>

                    <?php if (connect()) :           ?>
                    <a href="<?= BASE_PATH . '?a=dis'; ?>" class="btn btn-primary">Déconnexion</a>
                    <?php else :           ?>
                    <a href="<?= BASE_PATH . 'security/login.php'; ?>" class="btn btn-primary">Connexion</a>
                    <a href="<?= BASE_PATH . 'security/register.php'; ?>" class="btn btn-success">Inscription</a>
                    <?php endif;        ?>

                </div>
            </div>
        </nav>
    </header>
    <main>