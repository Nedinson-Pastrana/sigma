    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="<?= media();?>/images/usuario2.png"<?=$_SESSION['userData']['imgperfil'];?>" alt="Imagen de perfil">
            <div>
                <p class="app-sidebar__user-name"><?= $_SESSION['userData']['nombres']; ?></p>
                <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol']; ?></p>
            </div>
        </div>

        <ul class="app-menu">
    <li>
        <a class="app-menu__item" href="<?=base_url();?>/dashboard"><i class="app-menu__icon bi bi-house-door"></i><span class="app-menu__label">Inicio</span></a></li>
        <a class="app-menu__item" href="<?=base_url();?>/programas"><i class="app-menu__icon bi bi-clipboard2-check"></i><span class="app-menu__label">Programas</span></a></li>
        <a class="app-menu__item" href="<?=base_url();?>/competencias"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Competencias</span></a></li>
        <a class="app-menu__item" href="<?=base_url();?>/dashboard"><i class="app-menu__icon bi bi-flag-fill"></i><span class="app-menu__label">Reportes</span></a></li>
        <li><a class="app-menu__item " href="<?=base_url();?>/fichas">
                    <i class="app-menu__icon bi bi-bookmark-star"></i>
                    <span class="app-menu__label">Fichas</span></a></li>

            <li><a class="app-menu__item " href="<?=base_url();?>/asignaciones">
                    <i class="app-menu__icon bi bi-check2-circle"></i>
                    <span class="app-menu__label">Asignaciones</span></a></li>
            <li>


    </li>
    
    <?php if (!empty($_SESSION['permisos'][1]['r'])) {?>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-person-gear"></i>
            <span class="app-menu__label">Administrador</span>
            <i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][1]['u'])) {?>
                    <li>
                        <a class="treeview-item" href="<?=base_url();?>/roles">
                            <i class="app-menu__icon bi bi-toggles"></i>
                            Roles</a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
                <li><a class="app-menu__item " href="<?=base_url();?>/usuarios">
                    <i class="app-menu__icon bi bi-people"></i>
                    <span class="app-menu__label">Usuarios</span></a></li>
                    <?php }?>
                    
     <li>
                        
    <a class="app-menu__item" href="<?=base_url();?>/dashboard"><i class="app-menu__icon bi bi-tools"></i><span class="app-menu__label">Soporte</span></a></li>
    <a class="app-menu__item logout-btn" class="logout-bt" href="Logout"><i class="app-menu__icon  bi bi-box-arrow-right"></i><span class="app-menu__label">Cerrar Sesión</span></a>

    </li>

    </ul>

    </aside>