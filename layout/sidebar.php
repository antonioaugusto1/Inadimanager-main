

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../home/home.php">
    <div class="sidebar-brand-text mx-3"><img class = "img-dashbord" src="../img/favicon-alvina.png">Inadimanager</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
        <?php
        if($_SESSION['cod_usu']== 1){
           ?>           
           <!-- Divider -->
           <hr class="sidebar-divider my-0">
           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
            <a class="nav-link" href="../usuario/usuario.php">
                <i class="fa fa-user-circle"></i>
                <span>Usuários</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../cliente/cliente.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Clientes</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="../promissoria/promissoria.php">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Promissórias</span></a>
                    </li>
                    
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <a class="nav-link" href="../promissoria/cad_promissoria.php">
                            <i class="fas fa-fw fa-clipboard-list"></i>
                            <span>Gerar Promissórias</span></a>
                        </li>
                        
                        <?php
                    }
                    ?>
                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

                    </ul>
                    <!-- End of Sidebar -->
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">
                        