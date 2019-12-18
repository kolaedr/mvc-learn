<?php

namespace Controllers;

class CopywritersController extends \Core\Controller
{
    // public function __construct()
    // {
    //     echo __CLASS__;
    // }
    public function copywriterList()
    {
        $copywriterslist = new \Models\Copywriters;
        $list = $copywriterslist->getCopywriters();
        // $this->dump($list);
        // $this->dump($latestNews);
        // echo $latestNews->totalResults;      //приходит объект, по этому можно обратиться как  к методу
        $title = 'Copywriters page MVC';
        \Core\View::render('copywriters/copywriterslist', compact('list', 'title'));        //собираем массив данных и передаем их в мэйн
        
    }

    

}
// ce8fd25f97ec4295b2c4852d1b4cea3f
