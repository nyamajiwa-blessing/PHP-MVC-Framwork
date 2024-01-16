<?php

if($_SERVER['SERVER_NAME'] == "localhost")
{
    define("DB_NAME","mvc_db");
    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("BASE_URL","http://localhost/mvc/public/");
}
else
{
    define("BASE_URL","https://www.websitename.co.zw");
}