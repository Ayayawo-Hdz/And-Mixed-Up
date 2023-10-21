<div class="modal fade" id="createA">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;">
          <h2 class="modal-title" style="color: white; margin: auto;">Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="logic/datum_r.php" method="POST">
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
          <form action="logic/datum_l.php" method="POST">
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