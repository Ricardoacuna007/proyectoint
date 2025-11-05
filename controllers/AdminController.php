<?php
require_once __DIR__ . '/../utils/View.php';

class AdminController
{
    public function index()
    {

        $dashboard = array
        (
            'title'  => "Welcome to dashboard admin",
            'action' => "My action"
        ); 
        session_start();
        echo $_SESSION['name']; exit();

        View::render("admin/indexView", ["dashboard" => $dashboard]);
    }
}

?>