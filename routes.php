<?php
  function call($controller, $action) {
    $controller->{ $action }();
  }

$controllers = array();

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } 
  } 
  ?>