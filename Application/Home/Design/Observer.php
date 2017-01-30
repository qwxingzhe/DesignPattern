<?php
namespace Design;
class UserObserver{
    
    private $observerObj = [];
    
    public function addObserverObj( $observerObj ){
        $this->observerObj[] = $observerObj;
    }
    
    public function login(){
        echo '用户登录了'."<br/>";
        
        foreach ($this->observerObj as $key=>$observer){
            $observer->update();
        }
    }
    
}


abstract class UserObserverBase{
    abstract public function update();
}

class IntegralUserObserver extends UserObserverBase{
    public function update(){
        echo '积分变更'."<br/>";
    }
}

class LogUserObserver extends UserObserverBase{
    public function update(){
        echo "新增日志<br/>";
    }
}