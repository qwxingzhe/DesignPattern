<?php
require_once 'Frame/Frame.php';
use Frame\Frame;
//模块
$module_name = 'm';
$default_module = 'Home';

//控制器
$controller_name = 'c';
$default_controller = 'Index';

//方法
$action_name = 'a';
$default_action = 'index';

var_dump($_GET);

define('MODULE', (isset($_GET[$module_name]))?$_GET[$module_name]:$default_module);
define('CONTROLLER', (isset($_GET[$controller_name]))?$_GET[$controller_name]:$default_controller);
define('ACTION', (isset($_GET[$action_name]))?$_GET[$action_name]:$default_action);

Frame::start();




