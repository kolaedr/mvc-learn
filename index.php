<?php
spl_autoload_register();        //автоподключение классов
Core\Router::start();       //обратились к классу и вызвали метод старт (:: - вызов метода класса без создания обьекта класса)
// Controllers\NavController::navbar();       
