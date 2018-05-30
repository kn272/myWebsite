<?php
namespace http;

class request
{
  public static function getRequestMethod()
  {
    $request_method = $_SERVER['REQUEST_METHOD'];
    return $request_method;
  }
  
  public static function getPage()
  {
    $page = 'homepage';
    if (!empty($_GET['page'])) 
    {
        $page = $_GET['page'];
    }
    return $page;
  }
  
  public static function getAction()
  {
    if (self::getRequestMethod() == 'POST') 
    {
      $action = 'create';
    }
    else
    {
      $action = 'show';
    }
    
    if (!empty($_GET['action']))
    {
      $action = $_GET['action'];
    }
    
    return $action;
  }
}
    