<?php
  function call($controller, $action) {

    require_once('controllers/' . $controller . '_controller.php');


    require_once("models/{$controller}.php");
    $controllerClassName = $controller . 'Controller';
    $controller = new $controllerClassName();


    $controller->{ $action }();
  }


$controllers = array('pages' => ['home'],
                    'post' => ['read','create','update','delete'],
                    );


  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } 
  
  } 

  ?>