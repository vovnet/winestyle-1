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
        // контроллер и действие по умолчанию

            $controller_name = 'find';
            $routes = explode('/', $_SERVER['REQUEST_URI']);

        $action_name = 'index';


        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = preg_split('/[?]/',$routes[2]);
            $action_name = $action_name[0];
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