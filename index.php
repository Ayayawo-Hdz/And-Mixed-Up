<?php include 'page_layout/head.php'; ?>
<title>& Mixed Up</title>
<link rel="icon" type="image/x-icon" href="img/icono.png">
<link rel="stylesheet" href="main_style.css">
<link rel="stylesheet" href="c_style.css">
<body>
  <div class="container-fluid heading">
    <div class="col-12" style="display: flex; justify-content: center; text-align: center;">
        <a href="index.php" style="text-decoration: none;"><p class="title-index d-flex justify-content-xxl-start">¡& Mixed Up!</p></a>
    </div>
  </div>
  <div class="container-fluid" style="background-color: white;">
      <p class="pt-3" style="text-align: center; color: black; font-size: 1.2rem;">
          ¡<a data-bs-toggle="modal" data-bs-target="#createA" class="link">Cree una cuenta</a> o <a data-bs-toggle="modal" data-bs-target="#login" class="link">inicie sesión</a> para poder comprar en línea!
      </p>
  </div>
  <div class="container-fluid row mx-0 py-2" style="background-color: black;">
    <div class="col-6 d-none d-sm-flex justify-content-center align-items-center">
      <p class="pt-3" style="font-size: 1.4rem; font-weight: 400; color: white;">¡Encuentra toda una variedad en nuestra tienda online!</p>
    </div>
    <div class="col-sm-6 col-12" style="display: flex; align-items: center; justify-content: right;">
      <div class="dropdown dropdown-menu-end">
        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="background-color: dimgray; color: white; font-size: 1.3rem;">
          Catálogo
        </button>
        <ul class="dropdown-menu slide-up" style="text-align: center;">
          <li><a class="dropdown-item cat-it" href="catalogue/vinyl.php">Vinilos</a></li>
          <li><a class="dropdown-item cat-it" href="catalogue/cd.php">CD'S</a></li>
          <li><a class="dropdown-item cat-it" href="catalogue/cassette.php">Cassettes</a></li>
          <li><a class="dropdown-item cat-it" href="catalogue/minidisc.php">MiniDiscs</a></li>
          <li><a class="dropdown-item cat-it" href="catalogue/recordplayer.php">Reproductores</a></li>
        </ul>
      </div>
    </div>
  </div>
  <?php include 'page_layout/forms.php' ?>
  <div id="banner-img" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#banner-img" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#banner-img" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#banner-img" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#banner-img" data-bs-slide-to="3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banners/banner1.jpg" class="d-block" style="width: 100vw; height: 40vh; margin: auto; object-fit: cover; filter: blur(4px);">
        </div>
        <div class="carousel-item">
          <img src="img/banners/banner2.jpg" class="d-block" style="width: 100vw; height: 40vh; margin: auto; object-fit: cover; filter: blur(4px);">
        </div>
        <div class="carousel-item">
          <img src="img/banners/banner3.jpg" class="d-block" style="width: 100vw; height: 40vh; margin: auto; object-fit: cover; filter: blur(4px);">
        </div>
        <div class="carousel-item">
          <img src="img/banners/banner4.jpg" class="d-block" style="width: 100vw; height: 40vh; margin: auto; object-fit: cover; filter: blur(4px);">
        </div>
      </div>
  </div>
  <br>
  <div style="display: flex; justify-content: center; text-align: center;">
    <p style="font-size: 2rem;">Todo lo que encuentres en nuestro catálogo de:</p>
  </div>
  <div class="row my-4 container-fluid" style="display: flex; justify-content: center; text-align: center;">
    <div class="col">
      <img class="img-ap" src="img/apartados/vinilo.png">
      <p style="font-size: 2rem; font-weight: 200;">Vinilos</p>
    </div>
    <div class="col">
      <img class="img-ap" src="img/apartados/cd.png">
      <p style="font-size: 2rem; font-weight: 200;">CD's</p>
    </div>
    <div class="col">
      <img class="img-ap" src="img/apartados/cassette.png">
      <p style="font-size: 2rem; font-weight: 200;">Cassettes</p>
    </div>
    <div class="col">
      <img class="img-ap" src="img/apartados/minidisc.png">
      <p style="font-size: 2rem; font-weight: 200;">MiniDiscs</p>
    </div>
    <div class="col">
      <img class="img-ap" src="img/apartados/reproductor.png">
      <p style="font-size: 2rem; font-weight: 200;">Reproductores</p>
    </div>
  </div>
  <div class="container-fluid row d-flex justify-content-center mx-0">
    <?php
        $response = json_decode(file_get_contents('http://localhost/&_Mixed_Up/logic/api-products.php?category=vinyl'), true);
        $response_c = json_decode(file_get_contents('http://localhost/&_Mixed_Up/logic/api-products.php?category=cd'), true);
        $response_ca = json_decode(file_get_contents('http://localhost/&_Mixed_Up/logic/api-products.php?category=cassette'), true);
        $response_m = json_decode(file_get_contents('http://localhost/&_Mixed_Up/logic/api-products.php?category=minidisc'), true);
        $response_r = json_decode(file_get_contents('http://localhost/&_Mixed_Up/logic/api-products.php?category=repplay'), true);
        foreach($response['items'] as $item) {
          include ('page_layout/items_main.php');
        }
        foreach($response_c['items'] as $item) {
          include ('page_layout/items_main.php');
        }
        foreach($response_ca['items'] as $item) {
          include ('page_layout/items_main.php');
        }
        foreach($response_m['items'] as $item) {
          include ('page_layout/items_main.php');
        }
        foreach($response_r['items'] as $item) {
          include ('page_layout/items_main.php');
        }
    ?>
  </div>
  <?php include 'page_layout/footer_main.php'; ?>
</body>
</html>
<!-- Hernández García Yahir Hiram 4/12/22 1259 líneas de código -->