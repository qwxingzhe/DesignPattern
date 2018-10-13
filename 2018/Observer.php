<?php
/**
 * 观察者模式
 *
 * 使用场景：钩子插件
 *
 * 有时又被称为发布-订阅模式。
 * 在此种模式中，一个目标物件管理所有相依于它的观察者物件，并且在它本身的状态改变时主动发出通知。
 * 这通常透过呼叫各观察者所提供的方法来实现。此种模式通常被用来实现事件处理系统。
 */

// 通知者
class Subject
{
    private $objs = [];

    public function attach($obj)
    {
        $this->objs[] = $obj;
    }

    public function notify()
    {
        foreach ($this->objs as $obj){
            $obj->update();
        }
    }

}


// 抽象观察者
interface Observer
{
    public function update();
}
// 具体观察者
class ConcreteObserver implements Observer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update()
    {
        echo $this->name . " 得到通知 <br/>";
    }
}

$observer = new Subject();
// 订阅
$observer->attach(new ConcreteObserver('小明'));
$observer->attach(new ConcreteObserver('小红'));
// 通知
$observer->notify();




