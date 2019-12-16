<?php

namespace Controllers;

class UserController extends \Core\Controller
{
    // public function __construct()
    // {
    //     echo __CLASS__;
    // }
    public function loginPage()
    {

        $title = 'Login page MVC';
        \Core\View::render('user/login', compact('', 'title'));
    }

    public function loginUser()
    {
        $login = $_POST['login'] ?? null;
        $password = $_POST['password'] ?? null;
        $title = 'Profile user';
        // \Core\View::render('home/contacts', compact('title'));
        // echo  'working';
        //\Core\Router::redirect('profile'); 
        if (!empty($login) && !empty($password)) {
            \Controllers\UserController::profilePage();
            // \Core\View::render('user/profile', compact('title', 'login', 'password'));
            // \Core\Router::redirect('user/profile'); 
            
        } else {
            \Core\View::render('user/login', compact('title'));
        }
    }

    public function profilePage()
    {
        $login = $_POST['login'] ?? null;
        $password = $_POST['password'] ?? null;
        $title = 'Profile page MVC';
        \Core\View::render('user/profile', compact('', 'title', 'login', 'password'));
    }
}
// ce8fd25f97ec4295b2c4852d1b4cea3f
