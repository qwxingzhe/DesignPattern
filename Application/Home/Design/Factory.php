<?php
namespace Design;


/**
 * 游戏基类
 * @author xingzhe
 *
 */
abstract class GameBase{    
    /**
     * 开始游戏
     */
    abstract public function start();
    /**
     * 充值
     */
    abstract public function pay();
    /**
     * 领取礼包
     */
    abstract public function getGift();
}

class DaxiaGame extends GameBase{
    public function start(){
        echo "开始玩大侠传";
    }
    public function pay(){
        
    }
    public function getGift(){
        
    }
}
class XianjianGame extends GameBase{
    public function start(){
        echo "开始玩仙剑";
    }
    public function pay(){

    }
    public function getGift(){

    }
}


class GameFactory {

    static public function getGameObj($gameName){
        $class = $gameName . 'Game';
        return new $class();        //Class 'XXXXGame' not found
    }
}






