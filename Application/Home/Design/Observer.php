<?php
namespace Design;
/*
 在观察者模式中，会改变的是主题的状态以及观察者的数目。
 用这个模式，你可以改变依赖于主题状态的对象，却不必改变主题。——找出程序中会变化的方面，然后将其和固定不变的方面相分离!

 主题和观察者都使用接口:观察者利用主题的接口向主题注册，而主题利用观察者接口通知观察者。
 这样可以让两者之间运作正常，又同时具有松耦合的优点! ——针对接口编程，不针对实现编程!

 观察者模式利用“组合”将许多观察者组合进主题中。对象(观察者——主题)之间的这种关系不是通过继承产生的，而是在运行时利用组合的方式产生的。
  ——多用组合，少用继承！
 */
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