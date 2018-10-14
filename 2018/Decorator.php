<?php
/**
 * Created by PhpStorm.
 * User: xingzhe
 * Date: 2018/10/11
 * Time: 08:41
 */


/**
 * 装饰模式(Decorator Pattern) ：
 *
 * 动态地给一个对象增加一些额外的职责(Responsibility)，就增加对象功能来说，装饰模式比生成子类实现更为灵活。其别名也可以称为包装器(Wrapper)，
 * 与适配器模式的别名相同，但它们适用于不同的场合。
 * 根据翻译的不同，装饰模式也有人称之为“油漆工模式”，它是一种对象结构型模式。
 *
 * 装饰模式包含如下角色：
 *      Component: 抽象构件
 *      ConcreteComponent: 具体构件
 *      Decorator: 抽象装饰类
 *      ConcreteDecorator: 具体装饰类
 *
 * 来源：https://blog.csdn.net/qq_32300363/article/details/70947692
 */
abstract class Component
{
    abstract public function operation();

}

class ConcreteComponent extends Component
{
    public function operation()
    {
        echo '具体操作：ConcreteComponent';
    }
}

abstract class Decorator extends Component
{
    public function operation()
    {
        echo '具体操作：Decorator';
    }
}

class ConcreteDecoratorA extends Decorator
{
    public function operation()
    {
        parent::operation();
        echo '-----》装饰操作：ConcreteDecoratorA';
    }
}

class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        echo '装饰操作：ConcreteDecoratorB - start -----》';
        parent::operation();
        echo '-----》装饰操作：ConcreteDecoratorB end';
    }
}


(new ConcreteComponent())->operation();
echo "\r\n";
(new ConcreteDecoratorA())->operation();
echo "\r\n";
(new ConcreteDecoratorB())->operation();
echo "\r\n";









