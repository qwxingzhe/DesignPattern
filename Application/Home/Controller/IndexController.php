<?php
namespace Home;
class IndexController{
    public function index(){
        echo 'index';
    }
    
    public function page(){
        echo 'page';
    }
    
    public function game(){
        
        require_once 'Application/Home/Design/Factory.php';
        
        $game = \Design\GameFactory::getGameObj('Xianjian');
        $game->start();
    }
    
    
    
}