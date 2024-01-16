<?php

class App
{
    private $controller = "Home";
    private $method = "index";
    
    private function split_url()
    {
        $URL = $_GET['url'] ?? "home";
        $URL = explode("/", $URL);
        return $URL;
    }

    public function load_controller()
    {
        $URL = $this->split_url();
        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($filename))
        {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        }
        else
        {
            $filename = "../app/controllers/PageNotFound.php";
            require $filename;
            $this->controller = "PageNotFound";
        }

        $controller = new $this->controller;
        call_user_func_array([$controller,$this->method],[]);
    }
}


