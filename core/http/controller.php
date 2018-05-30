<?php
namespace http;
class controller
{
  public static function getTemplate($template, $data = NULL)
  {
    $template = 'pages/' . $template . '.php';
    include $template;
  }
}
?>