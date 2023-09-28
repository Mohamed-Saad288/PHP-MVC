<?php

namespace Core;

class Router
{
    public $routes =[
        "get"=>[],
        "post"=>[]
        ];
    public static function load($file)
    {
        $router = new static();
        require $file;
        return $router;
    }

    public function get($uri,$controller)
    {
        return $this->routes["get"]["$uri"] = $controller;
    }
    public function post($uri,$controller)
    {
        return $this->routes["post"]["$uri"] = $controller;
    }
    public function direct($uri ,$requestType)
    {
        if(array_key_exists($uri,$this->routes["$requestType"]))
        {
            return $this->callAction(...explode("@",$this->routes["$requestType"]["$uri"]));
        }
        else
        {
            throw new \Exception("No Route Define in URI");
        }
    }

    private function callAction($controller , $action)
    {
        $controller = "App\\Controllers\\".$controller;
        $controller = new $controller;
        if(!method_exists($controller,$action))
        {
            throw new \Exception("action not found");
        }
        return $controller->$action();
    }
}