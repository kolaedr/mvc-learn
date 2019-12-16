<?php

namespace Models;

class Navbar
{
    
    // public function __construct()
    // {
    //     echo __CLASS__;
    // }
    public static function getNavLinks()
    {
        $navLinks = require 'routes/web.php';
        $links = [];
        // $latestNews = $news->getNews('bitcoin');
        // print_r($navLinks);
        // echo $latestNews->totalResults;      //приходит объект, по этому можно обратиться как  к методу
        // $title = 'Home page MVC';
        // \Core\View::render('home/main', compact('navLinks'));        //собираем массив данных и передаем их в мэйн
        foreach($navLinks as $link=>$controller){
            $links[$link]=ucfirst($link!='/'?$link:'home');
        };
        return $links;
        
    }

    
}
