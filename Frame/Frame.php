<?php
namespace Frame;
//实例化控制器
class Frame{

    static public function start(){
        require_once 'Application/'.MODULE.'/Controller/'.CONTROLLER.'Controller.php';
        
        $class = '\\'.MODULE.'\\'.CONTROLLER.'Controller';
        $controller = new $class();
        $action = ACTION;
        $controller->$action();
    }
}