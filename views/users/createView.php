<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            require_once('views/template/header.php');
        ?>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">My App</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Menu-->
            <!-- Colocar menu de opciones de los diferentes nivels-->
            <!-- Menu-->

            <!-- Navbar-->
            <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul> -->
        </nav>
        <div id="layoutSidenav">
           <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <?php 
                    require_once('views/template/menuLeft.php');
                ?>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Auth users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
								<div class="panel panel-primary">
									<div class="panel-heading">Auth users</div>
									<div class="panel-body">
										<form action="" method="post">
											<div class="form-group">
												<label for="exampleInputPhone">Number phone</label> 
												<input type="text" class="form-control" name="inputPhone" placeholder="Enter your number phone">
												<small id="phoneHelp" class="form-text text-muted"><p class="text-danger"><?php echo $errors['inputnumberPhone'] ?? '' ?></p></small> 
											</div>                                                                   
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="password" class="form-control" name="inputPassword" placeholder="Enter your password">
												<small id="passwordHelp" class="form-text text-muted"><p class="text-danger"><?php echo $errors['inputPassword'] ?? '' ?></p></small>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary w-100" name="btnLogin" value="Entrar"> Login</button>
											</div>
										</form>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </main>
				
                <?php 
                    require_once('views/template/footer.php');
                ?>
            </div>
        </div>

        <?php 
            require_once('views/template/script.php');
        ?>

    </body>
</html>
