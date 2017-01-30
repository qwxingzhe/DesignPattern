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

/*
精髓：
根据不同的参数生成不同的类实例

工厂模式要点：
通常工厂模式有一个关键的构造，即一般被命名为factory的静态方法。这个静态方法可以接受任意数量的参数，并且必须返回一个对象。

为什么要使用工厂模式
工厂类就是一个专门用来创建其它对象的类，工厂类在多态性编程中非常重要。它允许动态替换类，修改配置，会使应用程序更加灵活。

应用场合
1）当客户程序不需要知道要使用对象的创建过程。
2）客户程序使用的对象存在变动的可能，或者根本就不知道使用哪一个具体的对象。
*/
class GameFactory {

    static public function getGameObj($gameName){
        $class = $gameName . 'Game';
        return new $class();        //Class 'XXXXGame' not found
    }
}






