<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sigma">
    <link rel="shortcut icon" href="<?=media();?>/images/favicon2.png">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?=media();?>/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-sweetalert@1.0.1/dist/sweetalert.min.css" rel="stylesheet">

    <title><?=$data['page_tag'];?></title>

</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <img src="<?=media();?>/images/logologin5.svg" height="90px">
        </div>

        <!-- Fondo con opacidad y blur -->
        <div class="alert-overlay" id="alertOverlay"></div>

        <!-- Imagen de alerta con botón de cierre -->
        <div class="alert-container" id="alertContainer">
            <button class="close-btn" id="closeAlert">
            <i class="bi bi-x"></i></button>
           <img src="<?=media();?>/images/bienvenida.jpg" alt="Alerta" class="alert-image">
        </div>

        <div class="login-box">
            <div id="divLoading">
                <div class="spinner-border visually-hidden" role="status">
                    <span class="visually-hidden">Cargando...</span>
                </div>
            </div>

            <form class="login-form" name="formLogin" id="formLogin" action="">
                <h3 class="login-head"><i class="bi bi-person me-2"></i>Bienvenidos</h3>

                <div class="mb-3 position-relative">
                    <label class="form-label"></label>
                    <i class="bi bi-person-fill icon-input boton1"></i>
                    <input id="txtIdentificacion" name="txtIdentificacion" class="form-control" type="number"
                        placeholder="Usuario">
                    <div class="invalid-feedback">El usuario es incorrecto</div>
                </div>

                <div class="mb-3 position-relative">
                    <label class="form-label"></label>
                    <i class="bi bi-lock-fill icon-input boton1"></i>
                    <input id="txtPassword" name="txtPassword" class="form-control" type="password"
                        placeholder="Password">
                    <div class="invalid-feedback">La contraseña es incorrecta</div>
                </div>

                <div id="alertLogin" class="text-center"></div>

                <div class="btn-container d-grid">
                    <button type="submit" class="btn btn-dark btn-block"><i
                            class="bi bi-box-arrow-in-right me-2 fs-5"></i> Iniciar Sesión</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        const base_url = "<?=base_url();?>";

        // Mostrar alerta con fondo
        function showAlert() {
            document.getElementById('alertOverlay').style.display = 'block';
            document.getElementById('alertContainer').style.display = 'block';
        }

        // Cerrar alerta
        document.getElementById('closeAlert').addEventListener('click', function () {
            document.getElementById('alertOverlay').style.display = 'none';
            document.getElementById('alertContainer').style.display = 'none';
        });

        // Llama a esta función para mostrar la alerta
        showAlert();
    </script>

    <!-- Essential javascripts for application to work-->
    <script src="<?=media();?>/js/jquery-3.7.0.min.js"></script>
    <script src="<?=media();?>/js/popper.min.js"></script>
    <script src="<?=media();?>/js/bootstrap.min.js"></script>
    <script src="<?=media();?>/js/fontawesome.js"></script>
    <script src="<?=media();?>/js/main.js"></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function () {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>

    <script src="<?=media();?>/js/plugins/pace.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-sweetalert@1.0.1/dist/sweetalert.min.js"></script>
    <script src="<?=media();?>/js/<?=$data['page_functions_js'];?>"></script>

</body>

</html>
