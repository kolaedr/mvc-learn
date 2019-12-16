<?php

namespace Controllers;

class HomeController extends \Core\Controller
{
    // public function __construct()
    // {
    //     echo __CLASS__;
    // }
    public function index()
    {
        $news = new \Models\News;
        $latestNews = $news->getNews('eth');
        // $this->dump($latestNews);
        // echo $latestNews->totalResults;      //приходит объект, по этому можно обратиться как  к методу
        $title = 'Home page MVC';
        \Core\View::render('home/main', compact('latestNews', 'title'));        //собираем массив данных и передаем их в мэйн
        
    }

    public function contacts()
    {
        $title = 'Contact';
        \Core\View::render('home/contacts', compact('title'));
    }

}
// ce8fd25f97ec4295b2c4852d1b4cea3f
