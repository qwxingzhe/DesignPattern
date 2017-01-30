<?php
namespace Home;
class IndexController{
    public function index(){
        echo 'index';
    }
    
    public function page(){
        echo 'page';
    }
    
    
    //工厂
    public function game(){
        
        require_once 'Application/Home/Design/Factory.php';
        
        $game = \Design\GameFactory::getGameObj('Xianjian');
        $game->start();
    }
    
    //观察者
    public function user(){

        require_once 'Application/Home/Design/Observer.php';
        
        $user = new \Design\UserObserver();
        
        $user->addObserverObj(new \Design\IntegralUserObserver());
        $user->addObserverObj(new \Design\LogUserObserver());
        
        $user->login();
        
    }
    
    
    
}