<?php
namespace Core;
class Router
{
    public static function redirect($p)
    {
        header('Location: '.$p);
        die();      //останавливает выполнение всего
    }

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
        $strController = 'Controllers\\' . $nameController;       //создаем строку для вызова контролера
        $controller = new $strController();
        if (!method_exists($controller, $nameMethod)) {
            die('Method controller not found');
        }
        $controller->$nameMethod();
        if (isset($_POST['action'])) {
            $form = $_POST['action'];
            list($nameController, $nameMethod) = explode('@', $form);
            $fileController = "controllers/{$nameController}.php";
            if (!file_exists($fileController)) {
                die('File controller not found');
            }
            $strController = 'Controllers\\' . $nameController;
            $controller = new $strController();
            if (!method_exists($controller, $nameMethod)) {
                die('Method controller not found');
            }
            $controller->$nameMethod();
        }
    }


}
