<?php

class App
{

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
        }
        else
        {
            $filename = "../app/controllers/PageNotFound.php";
            require $filename;
        }
    }
}


