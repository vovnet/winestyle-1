<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{


    static function startRouting()
    {
        // контроллер и экшн по умолчанию
        $controller_name = 'main';
        $action_name = 'index';

        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $routes = explode('/', $url);


        if (!empty($routes[0])) {
            $controller_name = $routes[0];
        }

        if (!empty($routes[1])) {
            $action_name = $routes[1];
        }

        // добавляем префиксы
        $model_name = $controller_name;
        $action_name = 'action_' . $action_name;


        // подцепляем файл с классом модели (файла модели может и не быть)


        $model_file = strtolower($model_name) . '.php';
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            include "application/models/" . $model_file;
        }

        // подцепляем файл с классом контроллера
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "application/controllers/" . $controller_file;


        if (file_exists($controller_path)) {
            include "application/controllers/" . $controller_file;
        } else
            {
            header('Location: '.SITE_ROOT.'404.php');
        }


        $controller = new $controller_name;

        $action = $action_name;
        if (method_exists($controller, $action)) {
            $controller->$action();
        }
        else {
            header('Location: '.SITE_ROOT.'404.php');
        }


    }
}