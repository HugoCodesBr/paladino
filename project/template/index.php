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

  <!-- bootstrap 4 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- style -->
  <link rel="stylesheet" href="assets/css/style.min.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Paladino - Web base</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light mx-lg-5 paladin-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./assets/images/paladinoH.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse font-2" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-auto">
          <li class="nav-item mx-2">
            <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-dark" href="#">About</a>
          </li>
          <li class="nav-item dropdown mx-2">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Features
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-dark" href="#">How it works</a>
          </li>
        </ul>
        <div class="navbar__login">
            <a href="#" class="btn btn-outline-dark btn-lg me-2">Sing-in</a>
            <a href="#" class="btn btn-primary btn-lg text-light">Get Started</a>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Importações de scripts: -->
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>