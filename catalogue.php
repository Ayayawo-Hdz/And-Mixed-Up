<?php include 'page_layout/head.php'; ?>
<title>Catálogo | & Mixed Up</title>
<link rel="icon" type="image/x-icon" href="img/icono.png">
<link rel="stylesheet" href="main_style.css">
<link rel="stylesheet" href="c_style.css">
<body>
  <?php include 'page_layout/header_main.php'; include 'page_layout/navbar.php'?>
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
  <div class="row my-4 container-fluid" style="display: flex; justify-content: center; text-align: center;">
    <div class="col">
      <a class="cat" href="catalogue/vinyl.php">
        <img class="img-cat" src="img/apartados/vinilo.png">
        <p>Vinilos</p>
      </a>
    </div>
    <div class="col">
      <a class="cat" href="catalogue/cd.php">
        <img class="img-cat" src="img/apartados/cd.png">
        <p>CD's</p>
      </a>
    </div>
    <div class="col">
      <a class="cat" href="catalogue/cassette.php">
        <img class="img-cat" src="img/apartados/cassette.png">
        <p>Cassettes</p>
      </a>
    </div>
    <div class="col">
      <a class="cat" href="catalogue/minidisc.php">
        <img class="img-cat" src="img/apartados/minidisc.png">
        <p>MiniDiscs</p>
      </a>
    </div>
    <div class="col">
      <a class="cat" href="catalogue/recordplayer.php">
        <img class="img-cat" src="img/apartados/reproductor.png">
        <p>Reproductores</p>
      </a>
    </div>
  </div>
  <div class="container-fluid mt-3" style="background-color: white; text-align: center;">
    <p style="font-size: 3rem; font-weight: 200;">Catálogo completo de la tienda</p>
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
  <br>
  <?php include 'page_layout/footer_main.php'; ?>
</body>
</html>