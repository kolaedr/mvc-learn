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
        
        // \Core\View::render('home/contacts', compact('title'));
        // echo  'working';
        //\Core\Router::redirect('profile'); 
        if (empty($login) && !empty($password)) {
            $title = 'Profile user';
            \Controllers\UserController::profilePage();
            \Core\View::render('user/profile', compact('title', 'login', 'password'));
            // \Core\Router::redirect('user/profile'); 
            header('Location: /profile');

        } else {
            echo 22;
            $title = 'FUUUUUUUU';
            \Core\View::render('user/login', compact('title'));
        }
    }

    public function registrationPage()
    {

        $title = 'Login page MVC';
        \Core\View::render('user/registration', compact('', 'title'));
    }

    public function registrationUser()
    {
        $login = $_POST['login'] ?? null;
        $password = $_POST['password'] ?? null;
        $passwordConfirm = $_POST['passwordConfirm'] ?? null;

        // \Core\View::render('home/contacts', compact('title'));
        // echo  'working';
        //\Core\Router::redirect('profile'); 
        if (empty($login) && $passwordConfirm == $password) {
            $title = 'You are registered';
            // \Controllers\UserController::profilePage();
            \Core\View::render('user/profile', compact('title', 'login'));
            // \Core\Router::redirect('profile'); 
            exit;

        } else if ($passwordConfirm != $password) {
            $text = 'Password not confirm';
            echo 'Password not confirm';
            \Core\View::render('user/registration', compact('title', 'text'));
            exit;
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

    public function allUsersPage()
    {
        $users = require_once 'base/users.php';

        $allUsers = [];
        foreach ($users as $name => $mail) {
            $allUsers[] = "<li class=''> $name (email: $mail) </li>";
        }
        $title = 'All Users page MVC';
        \Core\View::render('user/userList', compact('', 'title', 'allUsers'));
    }
}
// ce8fd25f97ec4295b2c4852d1b4cea3f
