<?php
require_once __DIR__ . '/../utils/View.php';

class DashboardController
{
    public function index()
    {
        $dashboard = array
        (
            'title'  => "Welcome to dashboard",
            'action' => "My action"
        ); 

        View::render("dashboard/indexView", ["dashboard" => $dashboard]);
    }
}

?>