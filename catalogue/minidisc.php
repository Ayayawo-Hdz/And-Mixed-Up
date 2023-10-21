<?php include '../page_layout/head.php'; ?>
<title>MiniDiscs | & Mixed Up</title>
<link rel="stylesheet" href="../c_style.css">
<body>
  <?php include '../page_layout/header.php'; include '../page_layout/session.php'; ?>
  <div class="container-fluid mt-3" style="background-color: white;">
    <p style="font-size: 1.3rem;">
      <a href="../catalogue.php" style="text-decoration: none; color: dimgray;">Inicio</a> / <span style="color: darkmagenta;">MiniDiscs</span>
    </p>
    <p style="font-size: 3rem; font-weight: 200;">MiniDiscs</p>
  </div>
  <div id="banner-img" class="carousel slide" data-bs-ride="carousel">
      <?php include '../page_layout/carousel_ind.php'; ?>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/catalogue_banners/mini1.jpg" class="d-block" style="width: 100vw; height: 40vh; margin: auto; object-fit: cover; filter: blur(4px);">
        </div>
        <div class="carousel-item">
          <img src="../img/catalogue_banners/mini2.webp" class="d-block" style="width: 100vw; height: 40vh; margin: auto; object-fit: cover; filter: blur(4px);">
        </div>
        <div class="carousel-item">
          <img src="../img/catalogue_banners/mini3.jpg" class="d-block" style="width: 100vw; height: 40vh; margin: auto; object-fit: cover; filter: blur(4px);">
        </div>
      </div>
  </div>
  <div class="container-fluid row d-flex justify-content-center mx-0">
    <?php
        $response = json_decode(file_get_contents('http://localhost/&_Mixed_Up/logic/api-products.php?category=minidisc'), true);
        foreach($response['items'] as $item) {
          include ('../page_layout/items.php');
        }
    ?>
  </div>
  <?php include '../page_layout/footer.php'; ?>
</body>