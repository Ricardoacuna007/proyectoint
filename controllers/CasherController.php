<?php
require_once __DIR__ . '/../utils/View.php';

class CasherController
{
    public function index()
    {
        $dashboard = array
        (
            'title'  => "Welcome to dashboard Casher",
            'action' => "My action"
        ); 

        View::render("casher/indexView", ["dashboard" => $dashboard]);
    }
}

?>