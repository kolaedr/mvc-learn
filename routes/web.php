<?php
#маршруты для нашего проекта
return [
    '/'=>'HomeController@index',
    'contacts'=>'HomeController@contacts',
    'login'=>'UserController@loginPage',
    'registration'=>'UserController@registrationPage',
    'profile'=>'UserController@profilePage',
    'allUsers'=>'UserController@allUsersPage',
    'copywriters'=>'CopywritersController@copywriterList',
];