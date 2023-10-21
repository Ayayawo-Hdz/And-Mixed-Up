<?php
  session_start();
  $user = $_SESSION['user'];
  if(!isset($user)) {
    header('location: /&_Mixed_Up/index.php');
  } else {
?>
<div class="container-fluid row mx-0" style="box-shadow: 0 2px 10px; background-color: black;">
    <div class="col pt-3">
      <div class="container-fluid" style="background-color: black;">
        <p style="color: white; font-size: 1.3rem;">
          <?php echo '¡Hola, ' . $user  . '! <br>'; echo '<a href="logic/close.php" class="link" style="color: darkmagenta;">Cerrar sesión</a>';}?>
        </p>
      </div>
    </div>
    <div class="col d-none d-xl-flex pt-3" style="display: flex; align-items: center; justify-content: center;">
      <p style="font-size: 1.4rem; font-weight: 400; color: white;">¡Encuentra toda una variedad en nuestra tienda online!</p>
    </div>
    <div class="col" style="display: flex; align-items: center; justify-content: right;">
      <div class="dropdown dropdown-menu-end mx-4">
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
      <a href="cart.php"><img src="img/cart.png" alt="cart" height="50" width="50" style="filter: invert(100%)"></a>
    </div>
</div>