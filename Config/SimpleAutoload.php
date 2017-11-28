<?php

spl_autoload_register(function ($class)
{
    $class = str_replace('\\', '/', $class);

    if(!file_exists($class . ".php")){
        throw new Exception("Такого файла нет");
    }

    include_once ($class . ".php");
});