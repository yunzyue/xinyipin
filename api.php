<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


define('BIND_MODULE','api');
// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
// 定义应用缓存目录
define('RUNTIME_PATH', __DIR__ . '/runtime/');
// 开启调试模式
define('APP_DEBUG', true);
require __DIR__ . '/thinkphp/start.php';
header("Access-Control-Allow-Origin: *");