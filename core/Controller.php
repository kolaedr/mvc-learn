<?php
namespace Core;

class Controller{
    public function dump($obj)
    {
        echo '<pre>'.print_r($obj, true) .'</pre>';
    }
}