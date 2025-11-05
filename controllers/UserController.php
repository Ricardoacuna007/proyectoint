<?php
require_once __DIR__ . '/../utils/View.php';
require_once __DIR__ . '/../utils/Auth.php';

class AdminController
{
    public function __construct()
    {
        // Verificar autenticación y nivel de acceso
        Auth::requireLogin();
        Auth::requireLevel(1); 
    }

    public function index()
    {
        $dashboard = array(
            'title'  => "Bienvenido al Dashboard de Administrador",
            'action' => "Panel de Control",
            'user'   => $_SESSION['authUser']['name'] ?? 'Admin'
        ); 

        View::render("admin/indexView", ["dashboard" => $dashboard]);
    }
}
?>