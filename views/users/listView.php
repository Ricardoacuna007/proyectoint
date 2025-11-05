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
                        <h1 class="mt-4">Gestión de Usuarios</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="http://localhost/sim/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Usuarios</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Lista de Usuarios Registrados
                            </div>
                            <div class="card-body">
                                <?php if (empty($users)): ?>
                                    <div class="alert alert-info">
                                        No hay usuarios registrados todavía.
                                    </div>
                                <?php else: ?>
                                    <table class="table table-striped table-bordered" id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Teléfono</th>
                                                <th>Usuario</th>
                                                <th>Nombre Completo</th>
                                                <th>Nivel</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($users as $user): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($user['pk_user']); ?></td>
                                                    <td><?php echo htmlspecialchars($user['fk_phone']); ?></td>
                                                    <td><?php echo htmlspecialchars($user['person']); ?></td>
                                                    <td>
                                                        <?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?>
                                                    </td>
                                                    <td>
                                                        <span class="badge 
                                                            <?php 
                                                                echo $user['level'] == 'Admin' ? 'bg-danger' : 
                                                                    ($user['level'] == 'Casher' ? 'bg-warning' : 'bg-secondary'); 
                                                            ?>">
                                                            <?php echo htmlspecialchars($user['level']); ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <?php if ($user['locked'] == 0): ?>
                                                            <span class="badge bg-success">Activo</span>
                                                        <?php else: ?>
                                                            <span class="badge bg-danger">Bloqueado</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary" title="Ver detalles">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-warning" title="Editar">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <?php if ($user['locked'] == 0): ?>
                                                            <button class="btn btn-sm btn-danger" title="Bloquear">
                                                                <i class="fas fa-lock"></i>
                                                            </button>
                                                        <?php else: ?>
                                                            <button class="btn btn-sm btn-success" title="Desbloquear">
                                                                <i class="fas fa-unlock"></i>
                                                            </button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </main>
                
                <?php require_once __DIR__ . '/../../resources/template/footer.php'; ?>
            </div>
        </div>

        <?php require_once __DIR__ . '/../../resources/template/script.php'; ?>
        <script src="http://localhost/sim/resources/js/datatables-simple-demo.js"></script>
    </body>
</html>