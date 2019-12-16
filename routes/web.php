<?php
#маршруты для нашего проекта
return [
    '/'=>'HomeController@index',
    'contacts'=>'HomeController@contacts',
    'login'=>'UserController@loginPage',
    'profile'=>'UserController@profilePage',
];