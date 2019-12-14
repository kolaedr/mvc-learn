<?php
namespace Core;

class Router
{
    public static function start()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : '/';
        $routes = require_once 'routes/web.php';
        if (!isset($routes[$url])) {
            die('Page not found');
        };
        list($nameController, $nameMethod) = explode('@', $routes[$url]);
        $fileController = "controllers/{$nameController}.php";
        if (!file_exists($fileController)) {
            die('File controller not found');
        }
        $strController = 'Controllers\\'.$nameController;       //создаем строку для вызова контролера
        $controller = new $strController();
        if (!method_exists($controller, $nameMethod)) {
            die('Method controller not found');
        }
        $controller->$nameMethod();
    }
}
