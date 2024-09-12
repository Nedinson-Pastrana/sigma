<?php headerAdmin($data);?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1>
                <i class="bi bi-house"></i>
                </i> Inicio
            </h1>
            <p>Sistema de Información para la Gestión de Módulos Académicos - SIGMA</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        </ul>
    </div>
    <div class="row">

        <?php if (!empty($_SESSION['permisos'][2]['d'])) {?>
        <div class="col-md-6 col-lg-3">
            <a href="<?=base_url()?>/usuarios" class="linkw">
                <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
                    <div class="info">
                        <h4>Usuarios</h4>
                        <p><b><?=$data['usuarios']?></b></p>
                    </div>
                </div>
            </a>
        </div>
        <?php }?>


        <?php if (!empty($_SESSION['permisos'][2]['d'])) {?>
        <div class="col-md-6 col-lg-3">
            <a href="<?=base_url()?>/programas" class="link-info">
                <div class="widget-small info coloured-icon">
                    <i class="icon bi bi-clipboard2-check fs-1"></i>
                    <div class="info">
                        <h4>Programas</h4>
                        <p><b><?=$data['programas']?></b></p>
                    </div>
                </div>
        </div>
        </a>
    </div>
    <?php }?>

    
    <?php if (!empty($_SESSION['permisos'][2]['d'])) {?>
        <div class="col-md-6 col-lg-3">
            <a href="<?=base_url()?>/competencias" class="link-info">
                <div class="widget-small info coloured-icon">
                    <i class="icon bi bi-table fs-1"></i>
                    <div class="info">
                        <h4>Competencias</h4>
                        <p><b><?=$data['competencias']?></b></p>
                    </div>
                </div>

        </div>
        </a>
    </div>
    <?php }?>
   

    <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Horas Mensuales</h3>
            <div class="ratio ratio-16x9">
              <div id="salesChart"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Horas</h3>
            <div class="ratio ratio-16x9">
              <div id="supportRequestChart"></div>
            </div>
          </div>
        </div>
      </div>
    </main>

</main>


<?php footerAdmin($data);?>