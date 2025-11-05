<?php 

    //echo $home['pkHome'];
    //echo $home['home']; 

?>

<?php /*foreach ($users as $user): ?>
        
    <?php echo $user['name']; ?>
    
<?php endforeach; */?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bootstrap 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <header class="jumbotron text-center" style="margin-bottom:0; background-color: #131516ff; padding: 15px;">
        <h3 style="color: white;">Inicio de Sesión</h2>
    </header>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Accede a tu cuenta</h3>
                    </div>
                    <div class="panel-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        </form>
                        <p class="text-center" style="margin-top: 15px;">
                            ¿Aún no tienes una cuenta? <a href="registro-v3.html">Regístrate aquí</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center" style="background-color: #131516ff; padding: 15px; position: fixed; bottom: 0; width: 100%;">
        <p style="color: white;">&copy; 2025 By Villafuerte. Todos los derechos reservados.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

