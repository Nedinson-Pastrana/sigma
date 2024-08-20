<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../../Assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
     <img src="../../Assets/images/Blue Modern Software Company Logo.svg" height="120px">
      </div>
      <div class="login-box">
        <form class="login-form" action="../dashboard/dashboard.php">
          <h3 class="login-head"><i class="bi bi-person me-2"></i>Iniciar Sesión</h3>
          <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input class="form-control" type="text" placeholder="Correo electronico" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input class="form-control" type="password" placeholder="Digite la contraseña">
          </div>
          <div class="mb-3">
            <div class="utility">
              <div class="form-check">
                <label class="form-check-label">
                  <!-- <input class="form-check-input" type="checkbox"><span class="label-text">Stay Signed in</span> -->
                </label>
              </div>
              <!-- <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p> -->
            </div>
          </div>
          <div class="mb-3 btn-container d-grid">
            <button class="btn btn-success btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INGRESAR</button>
          </div>
        </form>
        <form class="forget-form" action="../dashboard/dashboard.php">
          <!-- <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Forgot Password ?</h3> -->
          <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="mb-3 btn-container d-grid">
            <button class="btn btn-primary btn-block"><i class="bi bi-unlock me-2 fs-5"></i>RESET</button>
          </div>
          <div class="mb-3 mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="bi bi-chevron-left me-1"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>

  </body>
</html>