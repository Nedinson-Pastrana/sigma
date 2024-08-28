<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Nedinson Pastrana</p>
          <p class="app-sidebar__user-designation">Desarrollo de software</p>
        </div>
      </div>
      <ul class="app-menu">
          
      
        <li><a class="app-menu__item" href="<?=base_url();?>/dashboard"><i class="app-menu__icon bi bi-house-door"></i><span class="app-menu__label">Inicio</span></a></li>
        <li><a class="app-menu__item" href="./programas.html"><i class="app-menu__icon bi bi-clipboard2-check"></i><span class="app-menu__label">Programas</span></a></li>
        <li><a class="app-menu__item" href="./data-table-instructores.html"><i class="app-menu__icon bi bi-people-fill"></i><span class="app-menu__label">Instructores</span></a></li>
        <li><a class="app-menu__item" href="./Competencias.html"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Competencias</span></a></li>
        <li><a class="app-menu__item" href="./reportes.html"><i class="app-menu__icon bi bi-flag-fill"></i><span class="app-menu__label">Reportes</span></a></li>
        <li><a class="app-menu__item" href="./soporte.html"><i class="app-menu__icon bi bi-tools"></i><span class="app-menu__label">Soporte</span></a></li>
        
        <?php if (!empty($_SESSION['permisos'][1]['r'])) {?>
            <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-person-gear"></i>
        <span class="app-menu__label">Administrador</span> <i class="treeview-indicator bi bi-chevron-right"></i></a>
        <ul class="treeview-menu">
        <?php if (!empty($_SESSION['permisos'][1]['u'])) {?>
        <li>
        <a class="treeview-item" href="<?=base_url();?>/roles">
        <i class="app-menu__icon bi bi-toggles"></i> Roles</a></li><?php }?></ul></li><?php }?>
        
            
            <li><a class="app-menu__item logout-btn" class="logout-bt" href="Logout"><i class="app-menu__icon  bi bi-box-arrow-right"></i><span class="app-menu__label">Cerrar Sesión</span></a></li>
    </aside>
  </body>
</html>