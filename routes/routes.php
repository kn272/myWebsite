<?php
class routes
{
  public static function getRoutes()
  {
    //GET method index.php?page=homepage&action=show
    $routes[] = self::create('GET', 'show', 'homepage', 'homepageController', 'show');
    
    //POST method index.php?page=homepage&action=create
    $routes[] = self::create('POST', 'create', 'homepage', 'homepageController', 'create');
    
    return $routes;
  }
  
  public static function create($http_method, $action, $page, $controller, $method)
  {
    $route = new route();
    $route->http_method = $http_method;
    $route->action = $action;
    $route->page = $page;
    $route->controller = $controller;
    $route->method = $method;
    return $route;
  }
}

class route 
{
  public $http_method;
  public $page;
  public $action;
  public $method;
  public $controller;
}
?>
    
    