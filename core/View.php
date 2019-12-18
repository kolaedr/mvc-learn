<?php

namespace Core;

class View
{
    public static function render($path, $data=[])
    {
        extract($data);     //распаковка массива для использования переменных на всех подключенных ниже страницах
        unset($data);
        require_once 'views/header.php';
        require_once 'views/navbar.php';
        require_once "views/{$path}.php";
        require_once 'views/footer.php';
    }

        
}
