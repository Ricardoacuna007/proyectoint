<?php
require_once __DIR__ . '/../utils/View.php';

class GuestController
{
    public function index()
    {
        $dashboard = array
        (
            'title'  => "Welcome to dashboard Guest",
            'action' => "My action"
        ); 
        /*session_start();
        echo $_SESSION['name']; 
        var_dump(session_status());
        exit();*/
        View::render("guest/indexView", ["dashboard" => $dashboard]);
    }
}

?>