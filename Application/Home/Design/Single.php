<?php
namespace Design;
/*
 含义：
 作为对象的创建模式，单例模式确保某一个类只有一个实例，而且自行实例化并向整个系统全局地提供这个实例。
 它不会创建实例副本，而是会向单例类内部存储的实例返回一个引用。

 单例模式的三个要点：
 1）需要一个保存类的唯一实例的静态成员变量
 2）构造函数和克隆函数必须声明为私有的，防止外部程序new类从而失去单例模式的意义
 3）必须提供一个访问这个实例的公共的静态方法（通常为getInterface方法），从而返回唯一实例的一个引用

 为什么要使用单例模式
 针对单次页面级请求共享同一对象资源

 应用场合
 1）应用程序与数据库交互（单例模式可以避免大量的new操作，因为每一次new操作都会消耗内存资源和系统资源）
 2）控制配置信息（系统中需要用一个类来全局控制某些配置信息）
 */
class Single{
    static public $interfance = null;
    private function __construct(){}
    private function __clone(){}
    static public function getInterfance(){
        if( self::$interfance==null ){
            self::$interfance = new Single();
        }
        return self::$interfance;
    }
}