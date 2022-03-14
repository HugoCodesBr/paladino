<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ico/favicon-16x16.png">
    <link rel="manifest" href="./assets/ico/site.webmanifest">
    <link rel="mask-icon" href="./assets/ico/safari-pinned-tab.svg" color="#eb4d4b">
    <meta name="msapplication-TileColor" content="#eeeeee">
    <meta name="theme-color" content="#ffffff">

    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <title>Paladino | front-end base</title>
</head>
<body>
    <header>
        <nav class="header">
            <div class="container">
                <div class="header__content">
                    <a href="/" class="header__logo">
                        <img src="./assets/images/paladinoH.png" alt="">
                    </a>
                    <div class="header__burger">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <div class="line-3"></div>
                    </div>
                    <div class="header__menu desktop">
                        <?php include 'components/header-content.php'?>
                    </div>
                </div>
            </div>
            <div class="header__menu">
                <div class="container">
                    <?php include 'components/header-content.php'?>
                </div>
            </div>
        </nav>
    </header>