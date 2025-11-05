<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once __DIR__ . '/../../resources/template/header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.html">My App</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <?php require_once __DIR__ . '/../../resources/template/menu/menuLogin.php'; ?>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Iniciar Sesión</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Login</li>
                        </ol>
                        
                        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                            <div class="alert alert-success">
                                ¡Registro exitoso! Ahora puedes iniciar sesión.
                            </div>
                        <?php endif; ?>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Accede a tu cuenta</div>
                                    <div class="panel-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputPhone">Número de teléfono</label> 
                                                <input type="text" class="form-control" name="inputPhone" id="inputPhone" 
                                                       placeholder="Ingresa tu número de teléfono" maxlength="10">
                                                <small id="phoneHelp" class="form-text text-muted">
                                                    <p class="text-danger">Error en teléfono o contraseña</p>
                                                </small> 
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Contraseña</label>
                                                <input type="password" class="form-control" name="inputPassword" id="inputPassword" 
                                                       placeholder="Ingresa tu contraseña">
                                                <small id="passwordHelp" class="form-text text-muted">
                                                    <p class="text-danger">Error en teléfono o contraseña</p>
                                                </small>
                                            </div>
                                            
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary w-100" name="btnLogin" id="btnLogin">
                                                    Iniciar Sesión
                                                </button>
                                            </div>
                                            
                                            <p class="text-center mt-3">
                                                ¿No tienes cuenta? <a href="http://localhost/sim/user/create">Regístrate aquí</a>
                                            </p>
                                        </form>
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
        <script src="http://localhost/sim/resources/js/loginUser16.js"></script>
    </body>
</html>