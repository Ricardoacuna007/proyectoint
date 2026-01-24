<?php

class Router 
{
    private $controller;
    private $method;
    private $id;

    public function __construct() 
    {
        $this->controller = filter_input(INPUT_GET, 'controller', FILTER_SANITIZE_STRING);
        $this->method     = filter_input(INPUT_GET, 'method',     FILTER_SANITIZE_STRING);
        $this->id         = filter_input(INPUT_GET, 'id',         FILTER_SANITIZE_NUMBER_INT);
    }

    public function dispatch() 
    {
        if(!empty($this->controller))
        {
            $controllerName = ucfirst($this->controller) . "Controller";
            $controllerFile = "./controllers/$controllerName.php";
            
            if (!file_exists($controllerFile)) 
            {
                http_response_code(404);
                die("Error: Class '$controllerName' not found.");
            }
            else
            {
                include $controllerFile;
                $ctrl = new $controllerName;

                if(!empty($this->method))
                {     
                    if (method_exists($ctrl, $this->method)) 
                    {
                        if(!empty($this->id))
                        {
                            $ctrl->{$this->method}($this->id);  
                        }
                        else
                        {
                            $ctrl->{$this->method}();
                        }
                    }
                    else
                    {
                        http_response_code(404);
                        die("Error: El método '{$this->method}' no existe en '$controllerName'.");
                    }                    
                }
                else  
                { 
                    $ctrl->index();                                                    
                }
            }
        }
        else
        {
            http_response_code(404);
            die("Error: The controller '$this->controller' is empty.");
        }
    }
}

$router = new Router();
$router->dispatch();

?>
