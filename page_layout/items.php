<div class="container-fluid col-sm-12 col-md-6 col-xl-4 col-xxl-3 m-2 p-3" style="box-shadow: 0 -1px 5px rgba(0,0,0,0.2);">
    <input type="hidden" id="id" value="<?php echo $item['id']; ?>">
    <div class="d-flex justify-content-center"><img style="height: 25rem; width: 25rem; object-fit: contain" src="../img/products/<?php echo $item['image']; ?>"></div>
    <div class="d-flex justify-content-center" style="height: 3.5rem;"><?php echo $item['name']; ?></div>
    <div class="d-flex justify-content-center" style="height: 2rem; font-size: 1.5rem; font-weight: 500;">Disponible(s): <?php echo $item['stock']; ?></div>
    <div class="d-flex justify-content-center" style="font-size: 3rem;">$<?php echo $item['price']; ?> MXN</div>
    <?php 
    if ($item['stock'] <= 0) {
    ?>
        <div class="d-flex justify-content-center" style="font-size: 1.5rem; opacity: 0.5;">Producto agotado</div>
    <?php
    } else if (isset($user)) {
    ?>
        <form class="d-flex justify-content-center" action="../logic/cart_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
            <input type="hidden" name="stock" value="<?php echo $item['stock']; ?>">
            <input type="hidden" name="image" value="<?php echo $item['image']; ?>">
            <input type="hidden" name='txtProduct' value="<?php echo $item['name']; ?>">
            <input class="mx-1" style="width: 5rem; border-style: solid; border-color: darkmagenta; background-color: white; color: darkmagenta; padding: 0.3rem; border-radius: 5px;" type="number" name="cant" min='1' max='<?php echo $item['stock']; ?>' value="1">
            <input type="hidden" name="txtPrice" value="<?php echo $item['price']; ?>">
            <input class="mx-1" style="border-style: solid; border-color: darkmagenta; background-color: darkmagenta; color: white; padding: 0.3rem; border-radius: 5px;" type="submit" value="Agregar al carrito" name="btnAdd">
        </form>
    <?php
    } else {
        ?>
        <br>
        <p style="text-align: center; color: black; font-size: 1rem;">
            ¡<a data-bs-toggle="modal" data-bs-target="#createA" class="link">Crea una cuenta</a> o <a data-bs-toggle="modal" data-bs-target="#login" class="link">inicia sesión</a> para poder agregar al carrito!
        </p> 
        <?php
    }
    ?>
</div>
<div class="modal fade" id="createA">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;">
          <h2 class="modal-title" style="color: white; margin: auto;">Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="../logic/datum_r.php" method="POST">
            <div class="row" style="margin: auto;">
              <div class="col-6">
                <label for="names"><span style="color: darkmagenta;">*</span> Nombre(s):
                  <input class="regist" style="text-align: center;" type="text" name="names" required>
                </label>
                <label for="l_names"><span style="color: darkmagenta;">*</span> Apellido(s):
                  <input class="regist" style="text-align: center;" type="text" name="l_names" required>
                </label>
                <label for="tel"><span style="color: darkmagenta;">*</span> Teléfono:
                  <input class="regist" style="text-align: center;" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="tel" required>
                </label>
              </div>
              <div class="col-6">
                <label for="email"><span style="color: darkmagenta;">*</span> Correo electrónico:
                  <input class="regist" style="text-align: center;" type="email" name="email" required>
                </label>
                <label for="user"><span style="color: darkmagenta;">*</span> Nombre de usuario:
                  <input class="regist" style="text-align: center;" type="text" name="user" nrequired>
                </label>
                <label for="passname"><span style="color: darkmagenta;">*</span> Contraseña:
                  <input class="regist" style="text-align: center;" type="password" name="passname" required>
                </label>
              </div>
            </div>
        </div>
            <div class="modal-footer">
              <input class="button" type="submit" value="Crear cuenta">
              <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: dimgray; color: white; font-weight: 200;">Cerrar</button>
            </div>
          </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;">
          <h2 class="modal-title" style="color: white; margin: auto;">Inicia Sesión</h2>
        </div>
        <div class="modal-body ">
          <form action="../logic/datum_l.php" method="POST">
            <div class="row">
              <div class="col-6">
                <label for="user"><span style="color: darkmagenta;">*</span> Usuario:
                  <input class="regist" style="text-align: center;" type="text" name="user" required>
                </label>
              </div>
              <div class="col-6">
                <label for="passname"><span style="color: darkmagenta;">*</span> Contraseña:
                  <input class="regist" style="text-align: center;" type="password" name="passname" required>
                </label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <input class="button" type="submit" value="Iniciar sesión">
          <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: dimgray; color: white; font-weight: 200;">Cerrar</button>
        </div>
        </form>
      </div>
    </div>
</div>