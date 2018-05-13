<?php

class Router
{
    
    private $routes;
    
    public function __construct() 
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    /**
     * Метод getURI возвращает строку запроса
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() 
    {    
        // Получаемстроку запроса
        $uri = $this->getURI();
        
        // Проверяем наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) { 
            
            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
                
                // Получаем внутренний путь из внешнего
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
                // Определяем какой контроллер и метод обрабатывает запрос
                
                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                
                $parameters = $segments;
                
                
                // Подключаем файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';
                
                if (file_exists($controllerFile)) {
                    include_once ($controllerFile);
                    
                }
                
                // Создаем объект, вызываем метод
                
                $controllerObject = new $controllerName;
                
                $result = $controllerObject->$actionName();
                if ($result != null){
                    break;
                }
            }
        } 
    }
} 