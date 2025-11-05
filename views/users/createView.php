<!DOCTYPE html>
<html lang="es">
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
                    <h1 class="mt-4">Registro de Usuario</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/sim/user/auth">Login</a></li>
                        <li class="breadcrumb-item active">Registro</li>
                    </ol>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Crear Cuenta Nueva</div>
                                <div class="panel-body">
                                    <?php if (isset($errors['general'])): ?>
                                        <div class="alert alert-danger"><?php echo $errors['general']; ?></div>
                                    <?php endif; ?>
                                    
                                    <form action="http://localhost/sim/user/create" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Teléfono (10 dígitos)</label>
                                                    <input type="text" class="form-control" name="inputPhone" 
                                                           placeholder="Ej: 4431234567" maxlength="10" required>
                                                    <?php if (isset($errors['inputPhone'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputPhone']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Nombre de Usuario</label>
                                                    <input type="text" class="form-control" name="inputPerson" 
                                                           placeholder="Nombre de usuario" required>
                                                    <?php if (isset($errors['inputPerson'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputPerson']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" name="inputFirstName" 
                                                           placeholder="Nombre" required>
                                                    <?php if (isset($errors['inputFirstName'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputFirstName']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Apellido</label>
                                                    <input type="text" class="form-control" name="inputLastName" 
                                                           placeholder="Apellido" required>
                                                    <?php if (isset($errors['inputLastName'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputLastName']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Género</label>
                                                    <select class="form-control" name="inputGender" required>
                                                        <option value="">Seleccione...</option>
                                                        <option value="M">Masculino</option>
                                                        <option value="F">Femenino</option>
                                                    </select>
                                                    <?php if (isset($errors['inputGender'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputGender']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Fecha de Nacimiento</label>
                                                    <input type="date" class="form-control" name="inputBirthday" required>
                                                    <?php if (isset($errors['inputBirthday'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputBirthday']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Contraseña</label>
                                                    <input type="password" class="form-control" name="inputPassword" 
                                                           placeholder="Mínimo 8 caracteres" required>
                                                    <?php if (isset($errors['inputPassword'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputPassword']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Confirmar Contraseña</label>
                                                    <input type="password" class="form-control" name="inputPasswordConfirm" 
                                                           placeholder="Repite la contraseña" required>
                                                    <?php if (isset($errors['inputPasswordConfirm'])): ?>
                                                        <small class="text-danger"><?php echo $errors['inputPasswordConfirm']; ?></small>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group mt-3">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                Registrarse
                                            </button>
                                        </div>
                                        
                                        <p class="text-center mt-3">
                                            ¿Ya tienes cuenta? <a href="/sim/user/auth">Inicia sesión aquí</a>
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
</body>
</html>