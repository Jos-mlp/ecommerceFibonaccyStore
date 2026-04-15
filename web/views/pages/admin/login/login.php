<div class="login-page d-flex align-items-center justify-content-center" style="padding:60px 0; background: linear-gradient(135deg,#f9f9f9,#dadada);">
  <div class="login-box" style="width:100%; max-width:480px;">

    <div class="card" style="border-radius:20px; box-shadow:0 40px 100px -20px rgba(0,0,0,0.1); backdrop-filter:blur(20px); border:1px solid #e5e5e5;">
      
      <div class="card-header border-0 bg-transparent text-left">
        <span style="font-size:10px; letter-spacing:3px; text-transform:uppercase; color:#777;">System Authentication</span>
        <h3 style="font-size:32px; font-weight:700; margin-top:10px;">Administradores</h3>
      </div>

      <div class="card-body pt-0">

        <form method="post">

          <!-- EMAIL -->
          <div class="form-group">
            <label style="font-size:10px; letter-spacing:2px; text-transform:uppercase; color:#777;">
              Correo
            </label>
            <div class="input-group">
              <input type="email" name="loginAdminEmail" class="form-control border-0 border-bottom" 
                     placeholder="admin@email.com" style="border-radius:0; background:#f3f3f3;">
              <div class="input-group-append">
                <div class="input-group-text bg-transparent border-0 border-bottom">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
          </div>

          <!-- PASSWORD -->
          <div class="form-group">
            <label style="font-size:10px; letter-spacing:2px; text-transform:uppercase; color:#777;">
              Contraseña
            </label>
            <div class="input-group">
              <input type="password" name="loginAdminPass" class="form-control border-0 border-bottom" 
                     placeholder="••••••••" style="border-radius:0; background:#f3f3f3;">
              <div class="input-group-append">
                <div class="input-group-text bg-transparent border-0 border-bottom">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>

          <!-- ROW -->
          <div class="row mt-3">
            <div class="col-6 d-flex align-items-center">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" style="font-size:12px;">
                  Recordar
                </label>
              </div>
            </div>

            <div class="col-6">
              <button type="submit" class="btn btn-dark btn-block" 
                      style="height:45px; font-weight:600; letter-spacing:1px;">
                Ingresar →
              </button>
            </div>
            <?php
            require_once "controllers/admins.controller.php";
            $login = new AdminsController();
            $login->login();
            ?>
          </div>
        </form>

        <div class="mt-4 text-center">
          <a href="forgot-password.html" style="font-size:12px; color:#666;">
            Recuperar contraseña
          </a>
        </div>

      </div>

      <!-- FOOTER -->
      <div class="card-footer bg-transparent border-0">
        <div class="d-flex align-items-center">
          <div style="width:30px; height:30px; background:#eee; display:flex; align-items:center; justify-content:center;">
            <span class="fas fa-shield-alt"></span>
          </div>
          <div class="ml-2">
            <p style="font-size:9px; margin:0; letter-spacing:1px;">Secure Login</p>
            <p style="font-size:9px; margin:0; color:#999;">Encrypted Session</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>