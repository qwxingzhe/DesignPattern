<?php
/**
 * 单例模式
 * Class Singleton
 *
 * 单例模式也称单态，是23种设计模式中最简单的一种，从他的名字就可以知道他的核心思想，单例模式就是系统中只有一个这样的对象，对象只有一个，
 * 在Java或者C#中，单例模式一般有两种，分别是懒汉式、饿汉式，但是在PHP中常用的就是懒汉式，由于PHP是单线程的，懒汉式也不存在双重验证。
 */
class Singleton
{
    // 创建静态对象变量
    private static $instance = null;

    // 构造函数私有化，防止外部调用
    private function __construct(){}

    // 克隆函数私有化，防止外部克隆对象
    private function __clone(){}

    //
    public $num;

    // 获取/实例化对象方法，供外部统一调用
    public static function getInstance()
    {
        if( is_null(self::$instance) ){
            self::$instance = new self;
        }
        return self::$instance;
    }
}



// 测试代码
//+----------------------------------------------------
$obj_01 = Singleton::getInstance();
$obj_01->num = 1;

$obj_02 = Singleton::getInstance();
$obj_02->num = 2;

var_dump([$obj_01->num,$obj_02->num]);





