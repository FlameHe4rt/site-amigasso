<?php
    
    session_start();
    foreach(glob("controller/*.php") as $key){
        include_once($key);
    }
    foreach(glob("model/*.php") as $key){
        include($key);
    }
    
    use \controller as controller;
    use \model as model;
    require("config-def.php");
    
    
    $tmp = !empty($_GET['uri']) ? $_GET['uri'] : 'principal'; // Página padrão home
    
    $uri = explode('/', $tmp);
    
    $vars = array(
        'controller'   => (count($uri) > 0 ? array_shift($uri) : 'index'),
        'action'       => (count($uri) > 0 ? array_shift($uri) : 'index'),
        'params'       => (count($uri) > 0 ? array_shift($uri) : null)
    );
    
    $rota = 'controller\\'.ucfirst($vars['controller']).'::'.$vars['action'];
    
    if(method_exists('controller\\'.ucfirst($vars['controller']),$vars['action'])){
        call_user_func($rota); 
    }
?>