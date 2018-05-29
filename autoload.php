<?php
class Manage
{
  public static function core($class)
  {
    //echo $class . '<br>';
    $path = 'core/' . str_replace('\\','/', $class) . '.php';
    //echo $path . '<br>';
    
    if (is_file($path))
    {
      include $path;
      return;
    }
  }
  
  public static function resources($class)
  {
    //echo $class . '<br>';
    $path = 'resources/' . str_replace('\\','/', $class) . '.php';
    //echo $path . '<br>';
    
    if (is_file($path))
    {
      include $path;
      return;
    }
  }
  
  public static function routes($class)
  {
    //echo $class . '<br>';
    $path = 'routes/' . str_replace('\\','/', $class) . '.php';
    //echo $path . '<br>';
    
    if (is_file($path))
    {
      include $path;
      return;
    }
  }
}

spl_autoload_register(array('Manage', 'core'));
spl_autoload_register(array('Manage', 'resources'));
spl_autoload_register(array('Manage', 'routes'));
?>