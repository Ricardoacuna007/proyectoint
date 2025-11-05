<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once __DIR__ . '/../../resources/template/header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.html">My App - Admin</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
            
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" 
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://localhost/sim/user/logout">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <?php require_once __DIR__ . '/../../resources/template/menu/menuAdmin.php'; ?>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard Administrativo</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Panel de Control</div>
                                    <div class="panel-body">
                                        <h3><?php echo htmlspecialchars($dashboard['title']); ?></h3>
                                        <p>Bienvenido al panel de administración</p>
                                        
                                        <div class="row mt-4">
                                            <div class="col-md-4">
                                                <div class="card bg-primary text-white">
                                                    <div class="card-body">
                                                        <h5>Usuarios</h5>
                                                        <p><a href="http://localhost/sim/user/list" 
                                                              class="text-white">Ver todos los usuarios</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
                <?php require_once __DIR__ . '/../../resources/template/footer.php'; ?>
            </div>
        </div>

        <?php require_once __DIR__ . '/../../resources/template/script.php'; ?>
    </body>
</html>